/*
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2010, EllisLab, Inc.
 * @since		Version 2.0
 * @filesource
 */

$(document).ready(function(){function x(b){if(k[b]===undefined)b=0;jQuery.each(k[b],function(a,d){switch(a){case "categories":$("select#f_cat_id").empty().append(d);break;case "statuses":$("select#f_status").empty().append(d);break}})}function m(){if($("#custom_date_start").val()!="yyyy-mm-dd"&&$("#custom_date_end").val()!="yyyy-mm-dd"){focus_number=$("#date_range").children().length;$("#date_range").append('<option id="custom_date_option">'+$("#custom_date_start").val()+" to "+$("#custom_date_end").val()+
"</option>");document.getElementById("date_range").options[focus_number].selected=true;$("#custom_date_picker").slideUp("fast");oTable.fnDraw()}}function r(b,a,d){for(var f=0,g=b.length;f<g;f++)if(b[f].name==a)b[f].value=d}function l(b,a){for(var d=0,f=b.length;d<f;d++)if(b[d].name==a)return b[d].value;return null}$(".paginationLinks .first").hide();$(".paginationLinks .previous").hide();$(".toggle_all").toggle(function(){$("input.toggle").each(function(){this.checked=true})},function(){$("input.toggle").each(function(){this.checked=
false})});$("#custom_date_start_span").datepicker({dateFormat:"yy-mm-dd",prevText:"<<",nextText:">>",onSelect:function(b){$("#custom_date_start").val(b);m()}});$("#custom_date_end_span").datepicker({dateFormat:"yy-mm-dd",prevText:"<<",nextText:">>",onSelect:function(b){$("#custom_date_end").val(b);m()}});$("#custom_date_start, #custom_date_end").focus(function(){$(this).val()=="yyyy-mm-dd"&&$(this).val("")});$("#custom_date_start, #custom_date_end").keypress(function(){$(this).val().length>=9&&m()});
var k=EE.edit.channelInfo,y=RegExp("!-!","g"),z=(new Date).getTime();(function(){jQuery.each(k,function(b,a){jQuery.each(a,function(d,f){var g=new String;jQuery.each(f,function(s,e){g+='<option value="'+e[0]+'">'+e[1].replace(y,String.fromCharCode(160))+"</option>"});k[b][d]=g})})})();$("#f_channel_id").change(function(){x(this.value)});$("#date_range").change(function(){if($("#date_range").val()=="custom_date"){$("#custom_date_start").val("yyyy-mm-dd");$("#custom_date_end").val("yyyy-mm-dd");$("#custom_date_option").remove();
$("#custom_date_picker").slideDown("fast")}else $("#custom_date_picker").hide()});$("#entries_form").submit(function(){if(!$("input:checkbox",this).is(":checked")){$.ee_notice(EE.lang.selection_required,{type:"error"});return false}});var c={iCacheLower:-1};if(EE.edit.tableColumns==9){MyCols=[null,null,{bSortable:false},null,null,null,null,null,{bSortable:false}];MySortCol=5}else{MyCols=[null,null,{bSortable:false},null,null,null,null,{bSortable:false}];MySortCol=4}oTable=$("#entries_form .mainTable").dataTable({sPaginationType:"full_numbers",
bLengthChange:false,aaSorting:[[MySortCol,"desc"]],bFilter:false,sWrapper:false,sInfo:false,bAutoWidth:false,iDisplayLength:+EE.edit.perPage,aoColumns:MyCols,oLanguage:{sZeroRecords:EE.lang.noEntries,oPaginate:{sFirst:'<img src="'+EE.edit.themeUrl+'images/pagination_first_button.gif" width="13" height="13" alt="&lt; &lt;" />',sPrevious:'<img src="'+EE.edit.themeUrl+'images/pagination_prev_button.gif" width="13" height="13" alt="&lt; &lt;" />',sNext:'<img src="'+EE.edit.themeUrl+'images/pagination_next_button.gif" width="13" height="13" alt="&lt; &lt;" />',
sLast:'<img src="'+EE.edit.themeUrl+'images/pagination_last_button.gif" width="13" height="13" alt="&lt; &lt;" />'}},bProcessing:true,bServerSide:true,sAjaxSource:EE.BASE+"&C=content_edit&M=edit_ajax_filter&time="+z,fnServerData:function(b,a,d){var f=+EE.edit.pipe,g=false,s=l(a,"sEcho"),e=l(a,"iDisplayStart"),i=l(a,"iDisplayLength"),h=e+i,n=document.getElementById("keywords"),t=document.getElementById("f_status"),o=document.getElementById("f_channel_id"),u=document.getElementById("f_cat_id"),p=document.getElementById("f_search_in"),
v=document.getElementById("date_range"),w=document.getElementById("f_perpage"),q="&ajax=true&keywords="+n.value+"&channel_id="+o.value;if(p.value=="comments")window.location=EE.BASE+"&C=content_edit&M=view_comments"+q;a.push({name:"keywords",value:n.value},{name:"status",value:t.value},{name:"channel_id",value:o.value},{name:"cat_id",value:u.value},{name:"search_in",value:p.value},{name:"date_range",value:v.value},{name:"per_page",value:w.value});c.iDisplayStart=e;if(c.iCacheLower<0||e<c.iCacheLower||
h>c.iCacheUpper)g=true;if(c.lastRequest&&!g){h=0;for(q=a.length;h<q;h++)if(a[h].name!="iDisplayStart"&&a[h].name!="iDisplayLength"&&a[h].name!="sEcho")if(a[h].value!=c.lastRequest[h].value){g=true;break}}c.lastRequest=a.slice();if(g){if(e<c.iCacheLower){e-=i*(f-1);if(e<0)e=0}c.iCacheLower=e;c.iCacheUpper=e+i*f;c.iDisplayLength=l(a,"iDisplayLength");r(a,"iDisplayStart",e);r(a,"iDisplayLength",i*f);a.push({name:"keywords",value:n.value},{name:"status",value:t.value},{name:"channel_id",value:o.value},
{name:"cat_id",value:u.value},{name:"search_in",value:p.value},{name:"date_range",value:v.value},{name:"per_page",value:w.value});$.getJSON(b,a,function(j){c.lastJson=jQuery.extend(true,{},j);c.iCacheLower!=c.iDisplayStart&&j.aaData.splice(0,c.iDisplayStart-c.iCacheLower);j.aaData.splice(c.iDisplayLength,j.aaData.length);d(j)})}else{json=jQuery.extend(true,{},c.lastJson);json.sEcho=s;json.aaData.splice(0,e-c.iCacheLower);json.aaData.splice(i,json.aaData.length);d(json)}}});$("#keywords").keyup(function(){oTable.fnDraw()});
$("select#f_channel_id").change(function(){oTable.fnDraw()});$("select#f_cat_id").change(function(){oTable.fnDraw()});$("select#f_status").change(function(){oTable.fnDraw()});$("select#f_search_in").change(function(){oTable.fnDraw()});$("select#date_range").change(function(){oTable.fnDraw()});$("select#f_perpage").change(function(){oTable.fnDraw()})});