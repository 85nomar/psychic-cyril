function checkSelectConditions(listbox, webIDC) {
    var selectedValue = listbox.options[listbox.options.selectedIndex].value;

    // display/hide text area for description of corresponding listbox
    var isVisibleDesc = (selectedValue == 0);

    var nbParams = checkSelectConditions.arguments.length;
    var DivToDisplay = null;

    for (i = 2; i < checkSelectConditions.arguments.length; i++)
    {
        DivToDisplay = checkSelectConditions.arguments[i];
        setDivStatus(document, DivToDisplay + "Title", isVisibleDesc);
        setDivStatus(document, DivToDisplay + "Body", isVisibleDesc);
    }

    var priceStr;

    // disable/enable shipping cost text box
    if (listbox.id == "ShippingConditions") {
        var ShippingCostInput = document.getElementsByName("ShippingCost");
        var ShippingCostCentsInput = document.getElementsByName("ShippingCostCents");
        //functional for specific country
        switch (webIDC) {
            case 20:
                {
                    if (selectedValue == 3) {
                        ShippingCostInput[0].value = "";
                        ShippingCostInput[0].disabled = true;
                        ShippingCostCentsInput[0].value = "";
                        ShippingCostCentsInput[0].disabled = true;
                    } else {
                        ShippingCostInput[0].disabled = false;
                        ShippingCostCentsInput[0].disabled = false;
                    }
                    break;
                }
            case 2:
                {
                    var changedPacketWeight = $("#ShippingPacketWeight").attr("changed") == "changed";
                    var shippingCost = $("#ShippingConditions").attr("shippingcost");
                    //check whether user selected shipping condition with price, but without shipping weight options
                    if ($("#ShippingConditions option:selected").attr("price")) {
                        if (shippingCost <= 0) {
                            priceStr = $("#ShippingConditions option:selected").attr("price");
                            fillShippingCosts(priceStr);
                        }
                    } else {
                        if (changedPacketWeight)
                            clearShippingCosts();
                    }
                    //check whether user selected shipping condition which has inner shipping weight options
                    if ($("#ShippingPacketWeight option[shipping='" + selectedValue + "']").length > 0) {
                        $("#ShippingPacketWeight").show();

                        if (changedPacketWeight) {
                            $("#ShippingPacketWeight option").hide();
                            $("#ShippingPacketWeight option[shipping='" + selectedValue + "']").show();

                            var firstOption = $("#ShippingPacketWeight option[shipping='" + selectedValue + "']").eq(0);
                            firstOption.attr("selected", "selected");
                            if (firstOption.attr("price"))
                                fillShippingCosts(firstOption.attr("price"));
                        }
                    } else {
                        $("#ShippingPacketWeight").hide();
                    }
                    $("#ShippingPacketWeight").attr("changed", "changed");
                    if (shippingCost > 0) {
                        $("#ShippingConditions").attr("shippingcost", 0);
                    }
                    break;
                }
        }
    }

    //set shipping price
    if (listbox.id == "ShippingPacketWeight") {
        if ($("#ShippingPacketWeight option:selected").attr("price")) {
            $("#ShippingPacketWeight").attr("changed", "changed");
            priceStr = $("#ShippingPacketWeight option:selected").attr("price");
            fillShippingCosts(priceStr);
        }
    }

    //disable/enable ricardopay option
    if (listbox.id == "PaymentConditions") {
        if ($(listbox.options[listbox.options.selectedIndex]).attr("name") == "isUsingRicardoPay") {
            if ($("#RicardoPayPanel").attr("style") == "display: none;") {
                $("#isUsingRicardoPay").attr("checked", true);
            }
            $("#RicardoPayPanel").show();
        } else {
            $("#RicardoPayPanel").hide();
            $("#it_RicardoPayInfo").hide();
            $("#isUsingRicardoPay").removeAttr("checked");
        }
    }
}

//fill shipping costs fields with specific price in format {0.00}
function fillShippingCosts(priceStr) {
    var priceArr = priceStr.split(".");
    $("input[name='ShippingCost']").val(priceArr[0]);
    $("input[name='ShippingCostCents']").val((priceArr[1]) ? priceArr[1] : "00");
}

//clear shipping costs fields
function clearShippingCosts() 
{
    $("input[name='ShippingCost']").val("");
    $("input[name='ShippingCostCents']").val("");
}