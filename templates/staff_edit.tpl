<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>玉枢修车</title>
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
</head>

<body class="wrapper">    
    <form class="form widget" method="POST" name="mainform">
        <div class="title"><h6>添加职工</h6></div> 
        <div class="formRow" hidden="true">
            <label>序号:</label>
            <div class="formRight">
           	    <input type="text" {if $editdata}value="{$editid}"{/if} name="id" readonly="true"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>姓名:</label>
            <div class="formRight">
           	    <input type="text" {if $editdata}value="{$editdata[0]}"{/if} name="name"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>性别:</label>
            <div class="radio formRight" id="sex-radio">
                {foreach from=$sex item=i}
                <label><input type="radio" name="sex" value="{$i[0]}" {if $editdata && $editdata[1]==$i[0]}checked="checked"{/if}/>{$i[1]}</label>
                {/foreach}
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>出生日期:</label>
            <div class="formRight">
           	    <input class="maskDate" type="text" name="birth" {if $editdata}value="{$editdata[3]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>民族:</label>
            <div class="formRight">
                <select  name="nation">
                    <option value="0">请选择民族</option>
                    {foreach from=$nation item=i}
                    <option value="{$i[0]}" {if $editdata && $editdata[4]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>国籍:</label>
            <div class="formRight">
                <select  name="country">
                    <option value="0">请选择国籍</option>
                    {foreach from=$country item=i}
                    <option value="{$i[0]}" {if $editdata && $editdata[5]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>证件类型:</label>
            <div class="formRight">
                <select  name="ID_type">
                    <option value="0">请选择证件类型</option>
                    {foreach from=$idcard item=i}
                    <option value="{$i[0]}" {if $editdata && $editdata[6]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>证件号码:</label>
            <div class="formRight">
                <input type="text" name="ID_num" {if $editdata}value="{$editdata[7]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>文化程度:</label>
            <div class="formRight">
                <select  name="education">
                    <option value="0">请选择文化程度</option>
                    {foreach from=$education item=i}
                    <option value="{$i[0]}" {if $editdata && $editdata[8]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>职位:</label>
            <div class="formRight">
                <select  name="type">
                    <option value="0">请选择职位</option>
                    {foreach from=$type item=i}
                    <option value="{$i[0]}" {if $editdata && $editdata[2]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>联系电话:</label>
            <div class="formRight">
                <input type="text" name="phone" {if $editdata}value="{$editdata[9]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>户籍地址:</label>
            <div class="formRight">
                <input type="text" name="ID_address" {if $editdata}value="{$editdata[10]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>现住地址:</label>
            <div class="formRight">
                <input type="text" name="address" {if $editdata}value="{$editdata[11]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>入职日期:</label>
            <div class="formRight">
                <input class="maskDate" type="text" name="enter" {if $editdata}value="{$editdata[12]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>人员状态:</label>
            <div class="formRight">
                <select  name="state">
                    <option value="0">请选择人员状态</option>
                    {foreach from=$state item=i}
                    <option value="{$i[0]}" {if $editdata && $editdata[14]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>离职日期:</label>
            <div class="formRight">
                <input class="maskDate" type="text" name="quit" {if $editdata}value="{$editdata[13]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="wizButtons"> 
       	    <label class="red">{$message}</label>
			<span class="wNavButtons">
                {if $editdata}
               	<input class="blueB ml10" value="保存" type="submit" name="edit"/>
                {else}
                <input class="blueB ml10" value="添加" type="submit" name="add"/>
                {/if}
            </span>
        </div>
        <div class="clear"></div>   
    </form>
    <div class="clear"></div>
    
    <div id="footer">
        <div class="wrapper">
            版权所有© Copyright 2016-2018 版权所有 京ICP备16066672号&emsp;&emsp;&emsp;
            <a href="http://www.zslfinfo.com/" target="_blank">致生联发</a>
        </div>
    </div>
</body>
</html>
