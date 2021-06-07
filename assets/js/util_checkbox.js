function checkAll() 
{
    const usrCheck = document.querySelectorAll(".usrCheck");
    const usrCheckAll = document.querySelector("#select-All");

    for (i = 0; i < usrCheck.length; i++) {
        if (usrCheckAll.checked) {
            usrCheck[i].checked = true;
        } else {
            usrCheck[i].checked = false;
        }
    }
}

function selectChecked()
{
    const arr = []
    const usrCheck = document.querySelectorAll(".usrCheck");

    for (i = 0; i < usrCheck.length; i++) {
        if (usrCheck[i].checked) {
            arr.push(usrCheck[i].value);
        }
    }

    document.querySelector(".testOutput").textContent = arr;
}
