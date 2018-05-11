<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>修车系统</title>
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
    <form class="form widget" method="POST" >
        <div class="title"><h6>企业信息</h6></div> 
    <div class="widget">
        <div class="formRow"> 
            <label>企业代码:</label>  
            <div class="formRight">             
                <input type="text" value="{$companyid}" name="i" disabled="true" style="background:#CCCCCC"/>                                       
            </div>
            <div class="clear"></div>       
        </div> 
        <div class="formRow">
            <label>企业名称:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" {if $getCompany}value="{$getCompany[0]}"{/if} disabled="true"style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>所在地区:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" {if $getCompany}value="{$getCompany[1]}"{/if} disabled="true"style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>所属分局:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" {if $getCompany}value="{$getCompany[2]}"{/if} disabled="true" style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>所属派出所:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" {if $getCompany}value="{$getCompany[3]}"{/if} disabled="true" style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>联系电话:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" {if $getCompany}value="{$getCompany[4]}"{/if} disabled="true" style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
    </div>
      <div class="widget">
        <div class="formRow"> 
            <label>企业地址:</label>  
            <div class="formRight"> 
                <input type="text" name="commpyaddress" {if $editcompany}value="{$editcompany[1]}"{/if}/>                                          
            </div>
            <div class="clear"></div>       
        </div>
        <div class="formRow">
            <label>企业负责人:</label>
            <div class="formRight">
           	    <input type="text" name="charge" {if $editcompany}value="{$editcompany[2]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow"> 
            <label>企业负责人电话:</label>  
            <div class="formRight"> 
                <input type="text" name="charge_phone" {if $editcompany}value="{$editcompany[3]}"{/if}/>                                            
            </div>
            <div class="clear"></div>       
        </div>
        <div class="formRow">
            <label>公司法人:</label>
            <div class="formRight">
           	    <input type="text" name="corporation" {if $editcompany}value="{$editcompany[4]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>       
        <div class="formRow"> 
            <label>法人电话:</label>  
            <div class="formRight"> 
                <input type="text" name="corporation_phone" {if $editcompany}value="{$editcompany[5]}"{/if}/>                                               
            </div>
            <div class="clear"></div>       
        </div>
        <div class="formRow">
            <label>企业性质:</label>
            <div class="formRight">
                <select  name="nature">
                    {foreach from=$nature item=i}
                    <option value="{$i[0]}" {if $editcompany && $editcompany[6]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="formRow">
            <label>经营性质:</label>
            <div class="formRight">
                <select name="category">           
                    {foreach from=$category item=i}
                    <option value="{$i[0]}" {if $editcompany && $editcompany[7]==$i[0]}selected="selected"{/if}>{$i[1]}</option>
                    {/foreach}
                </select>           	    
            </div>
            <div class="clear"></div>
        </div> 

        <div class="formRow">
            <label>注册资金:</label>
            <div class="formRight">
           	    <input type="text" name="capital" {if $editcompany}value="{$editcompany[8]}"{/if} />
            </div>
            <div class="clear"></div>
        </div>  
         <div class="formRow">
            <label>经营范围:</label>
            <div class="formRight">
           	    <input type="text" name="scope" {if $editcompany}value="{$editcompany[9]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="formRow">
            <label>从业人员数量:</label>
            <div class="formRight">
           	    <input type="text" name="staff" {if $editcompany}value="{$editcompany[10]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>    
        <div class="formRow">
            <label>营业执照号码:</label>
            <div class="formRight">
           	    <input type="text" name="license" {if $editcompany}value="{$editcompany[11]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>    
        <div class="formRow">
            <label>经营面积:</label>
            <div class="formRight">
           	    <input type="text" name="area" {if $editcompany}value="{$editcompany[12]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>  
        <div class="formRow">
            <label>道路运输许可证编号:</label>
            <div class="formRight">
           	    <input type="text" name="transport" {if $editcompany}value="{$editcompany[13]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>  
        <div class="formRow">
            <label>开业时间:</label>
            <div class="formRight">
           	    <input class="maskDate" type="text" name="opentime" {if $editcompany}value="{$editcompany[14]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>  
        <div class="formRow">
            <label>企业联系电话:</label>
            <div class="formRight">
           	    <input type="text" name="phone" {if $editcompany}value="{$editcompany[15]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="formRow">
            <label>注册时间:</label>
            <div class="formRight">
           	    <input class="maskDate" type="text" name="register" {if $editcompany}value="{$editcompany[16]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="formRow">
            <label>治安负责人:</label>
            <div class="formRight">
           	    <input type="text" name="security" {if $editcompany}value="{$editcompany[17]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>  
        <div class="formRow">
            <label>保安人员数量:</label>
            <div class="formRight">
           	    <input type="text" name="security_num" {if $editcompany}value="{$editcompany[18]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>   
        <div class="formRow">
            <label>技防监控设施探头数量:</label>
            <div class="formRight">
           	    <input type="text" name="camera_num" {if $editcompany}value="{$editcompany[19]}"{/if}/>
            </div>
            <div class="clear"></div>
        </div>    
    </div>                                                                       
       <div class="wizButtons"> 
          <span class="wNavButtons">
           <label class="red">{$message}</label>
       	    	<input class="blueB ml10" value="保存" type="submit" name="edit"/>
            </a>
          </span>
      </div> 
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
