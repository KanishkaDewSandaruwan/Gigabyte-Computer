$('#select_g1').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    alert(valueSelected);
});