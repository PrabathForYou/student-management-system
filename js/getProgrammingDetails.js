function getHtml(result) {
    for(i = 0; 1 < result.length; i++) {
        let table = `<table>
            <thead>
            <tr>
                <th>Programme Code</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>${result.code}</td>
            </tr>
            </tbody>
        </table>`
    }

    // let table =
    //     `<table>
    //             <thead>
    //             <tr>
    //                 <th>Programme ID</th>
    //                 <th>Programme Code</th>
    //                 <th>Programme Department</th>
    //             </tr>
    //             </thead>
    //             <tbody>
    //             <tr>
    //
    //             </tr>
    //             </tbody>
    //     </table>`

    return table;
}

function getProgrammingDetails()
{
    $.ajax({
            url : "/ajax/getProgrammingDetailsAjax.php",
            type : "POST",
            dataType : "JSON",
            data: { action : "getProgrammingDetails" },
            beforeSend : function () {},
            success : function (result) {
                let resultString = JSON.stringify(result);
                console.log('result is ', result);
                let html = getHtml(resultString);
                $('#content').html(html);
            },
            error : function (error) {
                console.log('error is ', error);
            }
        })
}

// we can pass an onther function to this jquery page reload function
$(document).ready(
    function () {
        getProgrammingDetails();
    }
);