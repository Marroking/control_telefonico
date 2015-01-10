
var tpTable = null;

$(document).ready(function()
{
	tpTable = $ $('#allTypeCost').dataTable({
		"ajax": '/type_costs',
		"lengthMenu": [[5, 10, 15, -1], [5. 10. 15, "All"]]
	});
});