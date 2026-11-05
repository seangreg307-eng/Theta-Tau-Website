<?php
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
?>
<?php if (empty($row->field_field_youtube)): ?>
  <?php print $output; ?>
<?php else: ?>

<?php echo '<iframe width="240px" height="120px" src=';
echo '"';
#############################################################################
##  FormatYoutubeInput($link)
##  Returns the link formated as a youtube embed or returns 0 upon failure;
##  By: Alexander Hill (ahill6984@gmail.com)
##  Notes: currently this expects exactly 11 chars of the set '0-9 a-z A-Z _' 
function FormatYoutubeInputTwo($link){
    $pattern = '/^(.*)(=|\/)([0-9a-zA-Z_]{11})$/';
    preg_match($pattern, $link, $matches);
    $baseaddress = 'http://www.youtube.com/embed/';
    if($matches[3] != ''){
        return $baseaddress . $matches[3];
    }else{
        $pattern = '/^([0-9a-zA-Z_]{11})$/';
        preg_match($pattern, $link, $matches);
        if($matches[1] != ''){
            return $baseaddress . $matches[1];
        }
        $brokeaddress = 'http://www.youtube.com/embed/Ay4_o09Bt2Q';   
        return $brokeaddress;
    }
    #print_r($matches);
    #echo "<br><br>";
  }
print FormatYoutubeInputTwo($output);
echo '?wmode=transparent" frameborder="0" wmode="Opaque"></iframe>';
?>
<?php endif; ?>
