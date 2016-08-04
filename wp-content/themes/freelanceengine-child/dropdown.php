<?php

/* Template Name: Drop down Template */ 
get_header();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="http://hemp.marmondesigns.com/wp-content/uploads/2016/07/js.js"></script>

<style>.btn-select {
    position: relative;
    padding: 0;
    min-width: 236px;
    width: 100%;
    border-radius: 0;
    margin-bottom: 20px;
}

.btn-select .btn-select-value {
    padding: 6px 12px;
    display: block;
    position: absolute;
    left: 0;
    right: 34px;
    text-align: left;
    text-overflow: ellipsis;
    overflow: hidden;
    border-top: none !important;
    border-bottom: none !important;
    border-left: none !important;
}

.btn-select .btn-select-arrow {
    float: right;
    line-height: 20px;
    padding: 6px 10px;
    top: 0;
}

.btn-select ul {
    display: none;
    background-color: white;
    color: black;
    clear: both;
    list-style: none;
    padding: 0;
    margin: 0;
    border-top: none !important;
    position: absolute;
    left: -1px;
    right: -1px;
    top: 33px;
    z-index: 999;
}

.btn-select ul li {
    padding: 3px 6px;
    text-align: left;
}

.btn-select ul li:hover {
    background-color: #f4f4f4;
}

.btn-select ul li.selected {
    color: white;
}

/* Default Start */
.btn-select.btn-default:hover, .btn-select.btn-default:active, .btn-select.btn-default.active {
    border-color: #ccc;
}

.btn-select.btn-default ul li.selected {
    background-color: #ccc;
}

.btn-select.btn-default ul, .btn-select.btn-default .btn-select-value {
    background-color: white;
    border: #ccc 1px solid;
}

.btn-select.btn-default:hover, .btn-select.btn-default.active {
    background-color: #e6e6e6;
}
/* Default End */

/* Primary Start */
.btn-select.btn-primary:hover, .btn-select.btn-primary:active, .btn-select.btn-primary.active {
    border-color: #286090;
}

.btn-select.btn-primary ul li.selected {
    background-color: #2e6da4;
    color: white;
}

.btn-select.btn-primary ul {
    border: #2e6da4 1px solid;
}

.btn-select.btn-primary .btn-select-value {
    background-color: #428bca;
    border: #2e6da4 1px solid;
}

.btn-select.btn-primary:hover, .btn-select.btn-primary.active {
    background-color: #286090;
}
/* Primary End */

/* Success Start */
.btn-select.btn-success:hover, .btn-select.btn-success:active, .btn-select.btn-success.active {
    border-color: #4cae4c;
}

.btn-select.btn-success ul li.selected {
    background-color: #4cae4c;
    color: white;
}

.btn-select.btn-success ul {
    border: #4cae4c 1px solid;
}

.btn-select.btn-success .btn-select-value {
    background-color: #5cb85c;
    border: #4cae4c 1px solid;
}

.btn-select.btn-success:hover, .btn-select.btn-success.active {
    background-color: #449d44;
}
/* Success End */

/* info Start */
.btn-select.btn-info:hover, .btn-select.btn-info:active, .btn-select.btn-info.active {
    border-color: #46b8da;
}

.btn-select.btn-info ul li.selected {
    background-color: #46b8da;
    color: white;
}

.btn-select.btn-info ul {
    border: #46b8da 1px solid;
}

.btn-select.btn-info .btn-select-value {
    background-color: #5bc0de;
    border: #46b8da 1px solid;
}

.btn-select.btn-info:hover, .btn-select.btn-info.active {
    background-color: #269abc;
}
/* info End */

/* warning Start */
.btn-select.btn-warning:hover, .btn-select.btn-warning:active, .btn-select.btn-warning.active {
    border-color: #eea236;
}

.btn-select.btn-warning ul li.selected {
    background-color: #eea236;
    color: white;
}

.btn-select.btn-warning ul {
    border: #eea236 1px solid;
}

.btn-select.btn-warning .btn-select-value {
    background-color: #f0ad4e;
    border: #eea236 1px solid;
}

.btn-select.btn-warning:hover, .btn-select.btn-warning.active {
    background-color: #d58512;
}
/* warning End */

/* danger Start */
.btn-select.btn-danger:hover, .btn-select.btn-danger:active, .btn-select.btn-danger.active {
    border-color: #d43f3a;
}

.btn-select.btn-danger ul li.selected {
    background-color: #d43f3a;
    color: white;
}

.btn-select.btn-danger ul {
    border: #d43f3a 1px solid;
}

.btn-select.btn-danger .btn-select-value {
    background-color: #d9534f;
    border: #d43f3a 1px solid;
}

.btn-select.btn-danger:hover, .btn-select.btn-danger.active {
    background-color: #c9302c;
}
/* danger End */

.btn-select.btn-select-light .btn-select-value {
    background-color: white;
    color: black;
}
  span.btn-select-arrow.glyphicon.glyphicon-chevron-down {
    display: none;
}
.test{background:#000; padding:20px 0;}
  body span.btn-select-value {
    background: none !important;
    border: none !important;
    position: inherit !important;
}
  a#category {
    background: none !important;
    background-color: inherit !important;
    border: 2px solid #fff;
    margin: 40px;
}
  a#category .btn-select-value {
    padding: 16px 12px 16px 12px;}
  
 a#category .btn-select ul li {
    padding: 16px 12px !important;
}

 a#category ul {
    top: 55px !important;
    border: 2px solid #fff !important;
}
  .arow_icn{
    float: right;
    max-width: 20px;
}
  .btn-select ul li {
    padding: 14px 6px;
/*end bootstrap*/</style>
<div class="container test">
    <div class="row">
              <div class="col-xs-6 col-sm-3">
                   <a id="category" class="btn btn-success btn-select">
                <input type="hidden" class="btn-select-input" id="" name="" value="" />
                <span class="btn-select-value">Select an Item <img class="arow_icn" src="http://hemp.marmondesigns.com/wp-content/uploads/2016/06/arrow-png1.png" ></span>
                <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                <ul>
                    <li>Option 1</li>
                    <li class="selected">Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                  
                </ul>
            </a>
        </div>
      
    </div>
</div>
<?php 
  get_footer();
 ?>