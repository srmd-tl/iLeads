"use strict";
var KTDatatablesBasicBasic = {
	init: function () {
		var e;
		(e = $("#kt_table_1")).DataTable({
			responsive: !0,
			
			lengthMenu: [5, 10, 25, 50],
			pageLength: 10,
			language: {
				lengthMenu: "Display _MENU_"
			},
		});
	}
};
jQuery(document).ready(function () {
	KTDatatablesBasicBasic.init()
});