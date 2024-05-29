<script type="text/javascript">
function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            field.value = url;
            window.KCFinder = null;
        }
    };
    window.open('kcfinder/browse.php?type=images&dir=files/public', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}
</script>

<form>
<textarea class="ckeditor" cols="80" id="editor1" name="texto" rows="10">


            </textarea>

</form>    

<script src="ckeditor/ckeditor.js"></script>        
<script>
CKEDITOR.editorConfig = function(config) {
 config.filebrowserBrowseUrl = 'kcfinder/browse.php?type=files';
 config.filebrowserImageBrowseUrl = 'kcfinder/browse.php?type=images';
 config.filebrowserFlashBrowseUrl = 'kcfinder/browse.php?type=flash';
 config.filebrowserUploadUrl = 'kcfinder/upload.php?type=files';
 config.filebrowserImageUploadUrl = 'kcfinder/upload.php?type=images';
 config.filebrowserFlashUploadUrl = 'kcfinder/upload.php?type=flash';
};
</script>