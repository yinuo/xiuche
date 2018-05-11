<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>玉枢门禁</title>
	<link href="css/main.css" rel="stylesheet" type="text/css" />
    
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<script type="text/javascript" src="js/plugins/spinner/ui.spinner.js"></script>
	<script type="text/javascript" src="js/plugins/spinner/jquery.mousewheel.js"></script>

	<script type="text/javascript" src="js/jquery-ui.min.js"></script>

	<script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
	<script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="js/plugins/forms/uniform.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.cleditor.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="js/plugins/forms/autogrowtextarea.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.dualListBox.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"></script>
	<script type="text/javascript" src="js/plugins/forms/chosen.jquery.min.js"></script>

	<script type="text/javascript" src="js/plugins/wizard/jquery.form.js"></script>
	<script type="text/javascript" src="js/plugins/wizard/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/plugins/wizard/jquery.form.wizard.js"></script>

	<script type="text/javascript" src="js/plugins/uploader/plupload.js"></script>
	<script type="text/javascript" src="js/plugins/uploader/plupload.html5.js"></script>
	<script type="text/javascript" src="js/plugins/uploader/plupload.html4.js"></script>
	<script type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"></script>

	<script type="text/javascript" src="js/plugins/tables/datatable.js"></script>
	<script type="text/javascript" src="js/plugins/tables/tablesort.min.js"></script>
	<script type="text/javascript" src="js/plugins/tables/resizable.min.js"></script>

	<script type="text/javascript" src="js/plugins/ui/jquery.tipsy.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.progress.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.timeentry.min.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.breadcrumbs.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.sourcerer.js"></script>

	<script type="text/javascript" src="js/plugins/calendar.min.js"></script>
	<script type="text/javascript" src="js/plugins/elfinder.min.js"></script>

	<script type="text/javascript" src="js/custom.js"></script>
    
    <script type="text/php" src="php/device.php"></script>


</head>

<body class="wrapper">
    <form class="form widget" method="POST">
        <div class="formRow"> 
            <label>查找日期:</label>  
            <div class="formRight"> 
                开始日期： <input type="text" class="datepicker" name="dateStart" width="30%"/>
                结束日期： <input type="text" class="datepicker" name="dateEnd"/>                                                   
            </div>
            <div class="clear"></div>       
        </div>
        <div class="wizButtons"> 
       	    <div class="status" id="status1"></div>
			<span class="wNavButtons">
               	<input class="blueB ml10" value="查找" type="submit" name="select"/>
            </span>
        </div>
        <div class="clear"></div>   
    </form>
    <div class="widget">
        <div class="title"><h6>修车记录</h6></div>                          
       	<table class="display dTable">
            <thead>
            <tr>
                <th style="display:none">id</th>
                <th>状态</th>
                <th>车牌号</th>
                <th>送修人</th>
                <th>取车人</th>
                <th>维修人</th>
                <th>送修时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$table item=i}
                <tr>
                    <td style="display:none">{$i[0]}</td>
                    <td>{$i[1]}</td>
                    <td>{$i[2]}</td>
                    <td>{$i[3]}</td>
                    <td>{$i[4]}</td>
                    <td>{$i[5]}</td>
                    <td>{$i[6]}</td>
                    <td class="actBtns">
                        <a title="修改" class="tipS" onclick="editRow(this)">
                            <img src="images/icons/edit.png" alt="" />
                        </a>
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>  
    </div>      
    <div class="wizButtons"> 
        <span class="wNavButtons">
       	    <a class="wButton bluewB ml15 m10" href="record_edit.php">
                <span>添加记录</span>
            </a>
        </span> 
     </div>
     <div class="clear"></div>   
    
    
    <div id="footer">
        <div class="wrapper">
            版权所有© Copyright 2016-2018 版权所有 京ICP备16066672号&emsp;&emsp;&emsp;
            <a href="http://www.zslfinfo.com/" target="_blank">致生联发</a>
        </div>
    </div>
    <script>
        function editRow(row) {
            var parentTD = row.parentNode;
            var parentTR = parentTD.parentNode;
            this.location = "record_edit.php?editid=" + parentTR.childNodes[1].innerHTML; 
        }
    </script>
</body>
</html>
