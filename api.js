$(function () {
    apiProvince=(prodvince)=>{
        let district;
    
        prodvince.forEach(element => {
            $('#province').append(`<option value="${element.name}" selected="selected">${element.name}</option>`)
        });
        $('#province').change(function () {
            $('#district').html('<option value="-1" selected="selected">Chọn quận/huyện</option>')
            $('#town').html('<option value = "-1" selected="selected"> Chọn phường/xã </option>')
            let value = $(this).val();
            $.each(prodvince,function(index,element){
                if (element.name == value) {
                    district = element.districts;
                    $.each(element.districts,function(index,element1){
                        $('#district').append(`<option value="${element1.name}"selected="selected">${element1.name}</option>`)
                    })
                    
                }
            })         
        });    
        $('#district').change(function () {
            $('#town').html('<option value = "-1" selected="selected"> Chọn phường/xã </option>')
            let value = $(this).val();
            $.each(district,function(index,element){
                if (element.name == value) {
                    element.wards.forEach(element1 => {
                        $('#town').append(`<option value="${element1.name}" selected="selected">${element1.name}</option>`)
                    });
                }
            })       
        });
    }
    prodvince = JSON.parse(data);
     apiProvince(prodvince);
})