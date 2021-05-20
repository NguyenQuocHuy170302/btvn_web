const callAPI = () => {
    $.ajax({
        url: "https://codestar.free.beeceptor.com",
        method: "GET", // GET or POST or PUT or DELETE
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        data: {intput},
        success: data => {
            const {result} = data;
            $(".main-page .card-row").fadeOut(1000);
            
            for(let item of result) {
                const newItem=document.createElement("a");
                newItem.href="#";
                newItem.innerText=item;
                $(".main-page").append(newItem);
                $(".main-page").append("<br/>");
            }
        },
        error: (xhr, textStatus, errorThrown) => {
            console.log(textStatus);
        }
    });
};
