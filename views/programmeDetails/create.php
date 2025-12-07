<?php
require_once("../../database/Database.php");
require_once("../../database/ProgrammeDetails.php");

$database = new Database();
$programmingDetails = new ProgrammeDetails();

$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
    $code = isset($_POST['code']) ? trim($_POST['code']) : '';
    $no_of_sem = isset($_POST['no_of_sem']) ? (int)$_POST['no_of_sem'] : 0;
    $graduation_level = isset($_POST['graduation_level']) ? trim($_POST['graduation_level']) : '';
    $technical_level = isset($_POST['technical_level']) ? trim($_POST['technical_level']) : '';
    $department_id = isset($_POST['department_id']) ? (int)$_POST['department_id'] : null;

    if (!$title || !$code || !$no_of_sem || !$graduation_level || !$technical_level) {
        $message = 'All fields are required!';
        $messageType = 'error';
    } else {
        $programmingDetails->createProgramme($database, $title, $code, $no_of_sem, $graduation_level, $technical_level, $department_id);
        $message = 'Programme added successfully!';
        $messageType = 'success';
    }
}

ob_start();
?>

<div class="form-container">
    <div>
        <h2>Add New Programme</h2>
    </div>

    <?php if ($message): ?>
        <div class="alert alert-<?php echo $messageType; ?>">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>

    <form method="POST" class="programme-form">
        <div class="form-group">
            <label for="title">Programme Title *</label>
            <input type="text" id="title" name="title" placeholder="e.g., Bachelor of Science in Computer Science" required>
        </div>

        <div class="form-group">
            <label for="code">Programme Code *</label>
            <input type="text" id="code" name="code" placeholder="e.g., BSCS" required>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="no_of_sem">Number of Semesters *</label>
                <input type="number" id="no_of_sem" name="no_of_sem" min="1" max="12" placeholder="e.g., 8" required>
            </div>

            <div class="form-group">
                <label for="department_id">Department ID</label>
                <input type="number" id="department_id" name="department_id" placeholder="e.g., 101">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="graduation_level">Graduation Level *</label>
                <select id="graduation_level" name="graduation_level" required>
                    <option value="">-- Select Level --</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Master">Master</option>
                    <option value="PhD">PhD</option>
                </select>
            </div>

            <div class="form-group">
                <label for="technical_level">Technical Level *</label>
                <select id="technical_level" name="technical_level" required>
                    <option value="">-- Select Level --</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Add Programme</button>
            <button type="reset" class="btn btn-secondary">Clear Form</button>
            <a href="index.php" class="btn btn-cancel">Cancel</a>
        </div>
    </form>
</div>

<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        margin-bottom: 20px;
        color: #2c3e50;
        font-size: 24px;
    }

    .alert {
        padding: 12px 15px;
        margin-bottom: 20px;
        border-radius: 4px;
        font-weight: 500;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .alert-error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .programme-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .form-group label {
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
    }

    .form-group input,
    .form-group select {
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus {
        outline: none;
        border-color: #2c3e50;
        box-shadow: 0 0 5px rgba(44, 62, 80, 0.2);
    }

    .form-actions {
        display: flex;
        gap: 10px;
        justify-content: center;
        padding-top: 10px;
    }

    .btn {
        padding: 10px 25px;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background-color: #2c3e50;
        color: white;
    }

    .btn-primary:hover {
        background-color: #1a252f;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .btn-cancel {
        background-color: #e9ecef;
        color: #333;
        text-align: center;
    }

    .btn-cancel:hover {
        background-color: #dee2e6;
    }
</style>

<?php
$content = ob_get_clean();
include '../base.php';
?>
