
<style>
table.rv_data {
	border-collapse: collapse;
}
table.rv_data td {
	padding: 2px;
	border: solid 1px #999;
}
table.rv_data th {
	padding: 2px;
	vertical-align: top;
	text-align: right;
	border: solid 1px #999;
}
.rv_message {
	background-color: #ff0;
	border: solid 1px #f90;
	padding: 2px;
	font-style: italic;
}
.rv_null {
	color: #666;
	font-style: italic;
}

.opd_dataset {
	padding-left: 20px;
}
</style>

<?php echo $this->raw($results); ?>
