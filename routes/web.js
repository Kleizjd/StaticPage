$(document).ready(function () {
    //======================[  Acount  ]=========================// 
        $(function viewAcount() {
            $(document).on("click", "#viewAcount", function () {
            // $("#userID").val()
            // $(this).attr("userId")
            let userId = new Object();
             userId["userId"] = $("#userId").val();
                callView("Admin", "Admin", "viewAcount", userId);   
            });
        });
    
    //=============================[  PRODUCT  ]=========================// 
        $(function viewCreateProduct() {
            $(document).on("click", "#viewProduct", function () {
                callView("Product", "Product", "viewProduct");  
            });
        });
    // ---------------------------------------------------------------//
    // ------------/****SHOW MODAL Search PRODUCT****/----------------//
        $(document).on("click", "#Search", function () {
            $.ajax({
                url: "../../app/lib/ajax.php",
                method: "post",
                data: {
                    module: "Product",
                    controller: "Product",
                    nameFunction: "modalSearchProduct",
                }
            }).done((res) => {
                $("#modalSearchProduct .modal-body").html(res);
                $("#modalSearchProduct").modal({ backdrop: "static", keyboard: false });      
            });
        });
        //=============================[ CUSTOMER ]=========================//  
        $(function showCustomer() {
            $(document).on("click", "#showCustomer", function () {
                callView("Customer", "Customer", "viewCreateCustomer");
                
            });
        });
        // -------------------------------------------------------------//
        /****SHOW MODAL Search CLIENT**/
        $(document).on("click", "#SearchCustomer", function () {
            $.ajax({
                url: "../../app/lib/ajax.php",
                method: "POST",
                data: { module: "Customer",
                        controller: "Customer",
                        nameFunction: "modalSearchCustomer",
                    }
    
            }).done((res) => {
                $("#modalSearchCostumer .modal-body").html(res);
                $("#modalSearchCostumer").modal({ backdrop: "static", keyboard: false });
            });
        });
        //=============================[ PROVIDER ]=========================//  
        $(function showProvider() {
            $(document).on("click", "#showProvider", function () {
                
                callView("Provider", "Provider", "viewCreateProvider");
                
            });
        });
        // -------------------------------------------------------------//
        /****SHOW MODAL Search PROVIDER**/
        $(document).on("click", "#SearchProvider",
    