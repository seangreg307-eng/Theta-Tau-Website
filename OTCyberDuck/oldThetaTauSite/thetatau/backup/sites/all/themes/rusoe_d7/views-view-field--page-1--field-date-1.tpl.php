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
<?php
foreach($row->field_field_date as $data)
{
	$rawdate = strtotime( $data['raw']['value'] );
	$calendate = getdate($rawdate);
	switch ($calendate['mon']) {
		case 1:
			$monimg = 'jan.png';
			break;
		case 2:
			$monimg = 'feb.png';
			break;
		case 3:
			$monimg = 'mar.png';
			break;
		case 4:
			$monimg = 'apr.png';
			break;
		case 5:
			$monimg = 'may.png';
			break;
		case 6:
			$monimg = 'jun.png';
			break;
		case 7:
			$monimg = 'jul.png';
			break;
		case 8:
			$monimg = 'aug.png';
			break;
		case 9:
			$monimg = 'sep.png';
			break;
		case 10:
			$monimg = 'oct.png';
			break;
		case 11:
			$monimg = 'nov.png';
			break;
		case 12:
			$monimg = 'dec.png';
			break;
	}
//	echo "<img src='/sites/default/files/eventimages/" . $monimg . "' />";
echo '<div style="position: relative; background: url(/sites/default/files/eventimages/' . $monimg . ') no-repeat; width: 50px; height: 50px; float: left; padding-right: 20px">';
echo '<div style="font-size: 24px; text-align: center; top: .6em; position: relative; width: 50px; height:50px; margin: auto; font-weight: bold; color: black;">';
echo $calendate['mday'] . '</div></div>';
}
?>
