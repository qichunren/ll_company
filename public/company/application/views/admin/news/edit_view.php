<h2>修改新闻</h2>
<div class="box">
<?php echo form_open('admin/news/update', "id='edit_form'"); ?>
<input type="hidden" name="news_id" value="<?php echo $news->id; ?>" />
<p><label for="news_title">标题：</label><input type="text" class="text" id="news_title" name="news_title" value="<?php echo $news->title; ?>" /></p>
<p><label for="news_author">作者：</label><input type="text" class="text" id="news_author" name="news_author" value="<?php echo $news->author; ?>" style="width:120px;" />
    <label for="news_category_id">分类：</label>
        <select id="news_category_id" name="news_category_id">
            <?php $categories = $this->news->get_categories(); ?>
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>" <?php if($category->id == $news->news_category_id)echo "selected"; ?>  ><?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </p>

<p><textarea id="news_content" class="textarea" name="news_content" style="width:600px;height:400px;">
    <?php echo $news->content;?>
</textarea></p>
<div class="actions">
   <button type="submit" class="btn">保存</button>
</div>
</form>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascripts/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
    $(function(){


        $('#news_content').tinymce({
         // Location of TinyMCE script
         script_url : '<?php echo base_url(); ?>assets/javascripts/tiny_mce/tiny_mce.js',
         theme : "advanced",
         theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
            // Theme options
                   theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect",
                   theme_advanced_buttons2 : "pastetext,pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,|,insertdate,inserttime,|,forecolor,backcolor,code,preview",
                   theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
                   theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak"




      });


        $("#edit_form").submit(function(){
            if($.trim($("#news_title").val())==""){
                alert("请输入标题");
                $("#news_title").val("");
                $("#news_title").focus();
                return false;
            }
            if($.trim($("#news_author").val())==""){
                alert("请输入作者");
                $("#news_author").focus();
                return false;
            }
            if($.trim($("#news_content").val())==""){
                alert("请输入内容");
                $("#news_content").focus();
                return false;
            }
        });

    });
</script>