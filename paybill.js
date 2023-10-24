function navigateToPage() {
    var select = document.getElementById("paymentSelect");
    var selectedOption = select.options[select.selectedIndex].value;

    // Perform navigation based on the selected option
    switch (selectedOption) {
        case "payBill":
            window.location.href = "pay.php";
            break;
        case "buyGoodsServices":
            window.location.href = "buy_Goods.php";
            break;
        case "pochiLaBiashara":
            window.location.href = "pochilabiashara.php";
            break;
        default:
            break;
    }
}