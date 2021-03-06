/*!
 * angular-datatables - v0.5.0
 * https://github.com/l-lin/angular-datatables
 * License: MIT
 */
div.dataTables_length label {
    font-weight: normal;
    float: left;
    text-align: left;
}
div.dataTables_length select {
    width: 75px;
}
div.dataTables_filter label {
    font-weight: normal;
    float: right;
}
div.dataTables_filter input {
    width: 16em;
}
div.dataTables_info {
    padding-top: 8px;
}
div.dataTables_paginate {
    float: right;
    margin: 0;
}
div.dataTables_paginate ul.pagination {
    margin: 2px;
}
table.table {
    clear: both;
    max-width: none !important;
}
table.table thead .sorting,
table.table thead .sorting_asc,
table.table thead .sorting_desc,
table.table thead .sorting_asc_disabled,
table.table thead .sorting_desc_disabled {
    cursor: pointer;
    background: none;
}
table.table thead .sorting:before {
    content: ' ';
    position: relative;
    left: -5px;
}
table.table thead .sorting_desc:before {
    content: "\25BE";
    padding-right: 5px;
}
table.table thead .sorting_asc:before {
    content: "\25B4";
    padding-right: 5px;
}
.dataTables_scrollBody table.table thead .sorting:before,
.dataTables_scrollBody table.table thead .sorting_desc:before,
.dataTables_scrollBody table.table thead .sorting_asc:before {
    content: '';
    padding-right: 0;
}

table.dataTable th:active {
    outline: none;
}
.dataTables_wrapper .row {
    margin-top: 20px;
}
/* Scrolling */
 div.dataTables_scrollHead table {
    margin-bottom: 0 !important;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
div.dataTables_scrollHead table thead tr:last-child th:first-child, div.dataTables_scrollHead table thead tr:last-child td:first-child {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}
div.dataTables_scrollBody table {
    border-top: none;
    margin-bottom: 0 !important;
}
div.dataTables_scrollBody tbody tr:first-child th, div.dataTables_scrollBody tbody tr:first-child td {
    border-top: none;
}
div.dataTables_scrollFoot table {
    border-top: none;
}
/*
 * TableTools styles
 */
/*
.table tbody tr.active td, .table tbody tr.active th {
    background-color: #08C;
    color: white;
}
.table tbody tr.active:hover td, .table tbody tr.active:hover th {
    background-color: #0075b0 !important;
}
.table-striped tbody tr.active:nth-child(odd) td, .table-striped tbody tr.active:nth-child(odd) th {
    background-color: #017ebc;
}
*/
table.DTTT_selectable tbody tr {
    cursor: pointer;
}
div.DTTT .btn {
    color: #333 !important;
}
div.DTTT .btn:hover {
    text-decoration: none !important;
}
ul.DTTT_dropdown.dropdown-menu {
    z-index: 2003;
}
ul.DTTT_dropdown.dropdown-menu a {
    color: #333 !important;
}
ul.DTTT_dropdown.dropdown-menu li {
    position: relative;
}
ul.DTTT_dropdown.dropdown-menu li:hover a {
    background-color: #0088cc;
    color: white !important;
}
div.DTTT_collection_background {
    z-index: 2002;
}
/* TableTools information display */
div.DTTT_print_info.modal {
    height: 150px;
    margin-top: -75px;
    text-align: center;
}
div.DTTT_print_info h6 {
    font-weight: normal;
    font-size: 28px;
    line-height: 28px;
    margin: 1em;
}
div.DTTT_print_info p {
    font-size: 14px;
    line-height: 20px;
}
/*
 * FixedColumns styles
 */
div.DTFC_LeftHeadWrapper table, div.DTFC_LeftFootWrapper table, div.DTFC_RightHeadWrapper table, div.DTFC_RightFootWrapper table, table.DTFC_Cloned tr.even {
    background-color: white;
}
div.DTFC_RightHeadWrapper table, div.DTFC_LeftHeadWrapper table {
    margin-bottom: 0 !important;
    border-top-right-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}
div.DTFC_RightHeadWrapper table thead tr:last-child th:first-child, div.DTFC_RightHeadWrapper table thead tr:last-child td:first-child, div.DTFC_LeftHeadWrapper table thead tr:last-child th:first-child, div.DTFC_LeftHeadWrapper table thead tr:last-child td:first-child {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}
div.DTFC_RightBodyWrapper table, div.DTFC_LeftBodyWrapper table {
    border-top: none;
    margin-bottom: 0 !important;
}
div.DTFC_RightBodyWrapper tbody tr:first-child th, div.DTFC_RightBodyWrapper tbody tr:first-child td, div.DTFC_LeftBodyWrapper tbody tr:first-child th, div.DTFC_LeftBodyWrapper tbody tr:first-child td {
    border-top: none;
}
div.DTFC_RightFootWrapper table, div.DTFC_LeftFootWrapper table {
    border-top: none;
}
/*
 * ColVis
 */
ul.ColVis_collection {
    width: auto !important;
}
/*
 * Server side processing
 */
.dataTables_wrapper {
    position: relative;
}
.dataTables_wrapper .dataTables_processing {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 40px;
    margin-left: -50%;
    margin-top: -25px;
    padding-top: 20px;
    text-align: center;
    font-size: 1.2em;
    background-color: white;
    background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, 0.9)), color-stop(75%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
    /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    /* Chrome10+,Safari5.1+ */
    background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    /* FF3.6+ */
    background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    /* IE10+ */
    background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    /* Opera 11.10+ */
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    /* W3C */
}
.dataTables_wrapper .dataTables_processing {
    color: #333333;
}

.dataTables_paginate .paginate_button{border:1px solid #ccc; border-width:1px 1px 1px 0; cursor:pointer; padding:6px 12px;}
.dataTables_paginate .paginate_button.previous {
     border-width: 1px 1px 1px 1px; 
	 border-radius:4px 0px 0px 4px; 
}
.dataTables_paginate .paginate_button.next {
   border-radius:0 4px 4px 0; 
}
.paginate_button.current{
background:#337ab7;
color:#fff;
}
