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
        <div class="formRow" hidden="true">
            <label>序号:</label>
            <div class="formRight">
           	    <input type="text" {if $editid}value="{$editid}"{/if} name="id" readonly="true"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="title"><h6>送修人信息</h6></div>
        <div class="formRow">
            <label>驾驶证条码:</label>
            <div class="formRight">
           	    <input type="text" {if $editdata}value="{$editdata[1]}"{/if} name="number" style="width:60%"/>
                <input class="blueB ml10" value="老客户" type="submit" name="button1"/>
                <input class="blueB ml10" value="联网查" type="submit" name="button1"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>姓名:</label>
            <div class="formRight">
           	    <input type="text" {if $sendCustomer}value="{$sendCustomer[0]}"{/if} name="name"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>性别:</label>
            <div class="radio formRight" id="sex-radio">
                {foreach from=$sex item=i}
                <label><input type="radio" name="sex" value="{$i[0]}" {if $sendCustomer && $sendCustomer[1]==$i[0]}checked="checked"
                {elseif $sendCustomer == null && $i[1] == '男'}checked="checked"{/if}/>{$i[1]}</label>
                {/foreach}
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>证件类型:</label>
            <div class="formRight">
                <select  name="ID_type">
                    <option value="0">请选择证件类型</option>
                    {foreach from=$idcard item=i}
                    <option value="{$i[0]}" {if $sendCustomer && $sendCustomer[3]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>证件号码:</label>
            <div class="formRight">
                <input type="text" name="ID_num" {if $sendCustomer}value="{$sendCustomer[4]}"{/if} style="width:60%" onchange="setText()"/>
                <input class="blueB ml10" value="验证" type="submit" name="button1"/>
                <input type="text" name="idcheck" style="border:none;box-shadow:none;background:none;width:10%" 
                value={if $idcheck}{if $idcheck=='yes'}"*****"{else}"验证通过"{/if}{else}"未验证"{/if} readonly="true"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>联系电话:</label>
            <div class="formRight">
                <input type="text" name="phone" {if $sendCustomer}value="{$sendCustomer[2]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>户籍地址:</label>
            <div class="formRight">
                <input type="text" name="address" {if $sendCustomer}value="{$sendCustomer[5]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>送修日期:</label>
            <div class="formRight">
                <input class="maskDateTime" type="text" name="sendTime" {if $editdata}value="{$editdata[4]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="title"><h6>车辆信息</h6></div> 
        <div class="formRow">
            <label>行驶证条码:</label>
            <div class="formRight">
           	    <input type="text" {if $editdata}value="{$editdata[6]}"{/if} name="licenseNumber" style="width:60%"/>
                <input class="blueB ml10" value="老客户" type="submit" name="button2"/>
                <input class="blueB ml10" value="联网查" type="submit" name="button2"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车身主颜色:</label>
            <div class="formRight">
                <input type="text" name="color" {if $car}value="{$car[0]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车牌类型:</label>
            <div class="formRight">
                <select  name="plateType">
                    <option value="0">请选择车牌类型</option>
                    {foreach from=$plateType item=i}
                    <option value="{$i[0]}" {if $car && $car[1]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车牌号:</label>
            <div class="formRight">
                <input type="text" name="plateNumber" {if $car}value="{$car[2]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车架号:</label>
            <div class="formRight">
                <input type="text" name="VIN" {if $car}value="{$car[3]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车辆品牌:</label>
            <div class="formRight">
                <select  name="brand">
                    <option value="0">请选择车辆品牌</option>
                    {foreach from=$brand item=i}
                    <option value="{$i[0]}" {if $car && $car[4]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车辆型号:</label>
            <div class="formRight">
                <input type="text" name="model" {if $car}value="{$car[5]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="title"><h6>修车信息</h6></div>
        <div class="formRow">
            <label>修车人员:</label>
            <div class="formRight">
                <select  name="repairStaff">
                    <option value="0">请选择修车人员</option>
                    {foreach from=$repairStaff item=i}
                    <option value="{$i[0]}" {if $editdata && $editdata[7]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>当前状态:</label>
            <div class="formRight">
                <select  name="state">
                    <option value="0">请选择当前状态</option>
                    {foreach from=$state item=i}
                    <option value="{$i[0]}" {if $editdata && $editdata[0]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>修车描述:</label>
            <div class="formRight">
                <textarea name="describe" rows="8" class="autoGrow" style="height: auto; overflow: hidden;">
                {if $editdata}{$editdata[3]}{/if}
                </textarea>
            </div>
            <div class="clear"></div>
        </div>
        <div class="title"><h6>取车人信息</h6></div> 
        <div class="formRow">
            <label>驾驶证条码:</label>
            <div class="formRight">
           	    <input type="text" {if $editdata}value="{$editdata[2]}"{/if} name="number2" style="width:60%"/>
                <input class="blueB ml10" value="老客户" type="submit" name="button3"/>
                <input class="blueB ml10" value="联网查" type="submit" name="button3"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>姓名:</label>
            <div class="formRight">
           	    <input type="text" {if $takeCustomer}value="{$takeCustomer[0]}"{/if} name="name2"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>性别:</label>
            <div class="radio formRight" id="sex-radio">
                {foreach from=$sex item=i}
                <label><input type="radio" name="sex2" value="{$i[0]}" {if $takeCustomer && $takeCustomer[1]==$i[0]}checked="checked"
                {elseif $sendCustomer == null && $i[1] == '男'}checked="checked"{/if}/>{$i[1]}</label>
                {/foreach}
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>证件类型:</label>
            <div class="formRight">
                <select  name="ID_type2">
                    <option value="0">请选择证件类型</option>
                    {foreach from=$idcard item=i}
                    <option value="{$i[0]}" {if $takeCustomer && $takeCustomer[3]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>证件号码:</label>
            <div class="formRight">
                <input type="text" name="ID_num2" {if $takeCustomer}value="{$takeCustomer[4]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>联系电话:</label>
            <div class="formRight">
                <input type="text" name="phone2" {if $takeCustomer}value="{$takeCustomer[2]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>户籍地址:</label>
            <div class="formRight">
                <input type="text" name="address2" {if $takeCustomer}value="{$takeCustomer[5]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>取车日期:</label>
            <div class="formRight">
                <input class="maskDateTime" type="text" name="takeTime" {if $editdata}value="{$editdata[5]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="wizButtons"> 
        <label class="red">{$message}</label>
			<span class="wNavButtons">
                {if $editid}
               	<input class="blueB ml10" value="保存" type="submit" name="edit"/>
                {else}
                <input class="blueB ml10" value="添加" type="submit" name="add"/>
                {/if}
            </span>
        </div>
    <div class="clear"></div>
    </form>
    
    
    <div id="footer">
        <div class="wrapper">
            版权所有© Copyright 2016-2018 版权所有 京ICP备16066672号&emsp;&emsp;&emsp;
            <a href="http://www.zslfinfo.com/" target="_blank">致生联发</a>
        </div>
    </div>
    
    <script>
        function setText() {
            document.getElementById("idcheck").value="未验证";
        }
    </script>
</body>
</html>
