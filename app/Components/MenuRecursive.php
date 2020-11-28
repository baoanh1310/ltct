<?php 
	
namespace App\Components;

use App\Menu;

class MenuRecursive {

	private $html;

	public function __construct() {
		$this->html = '';
	}

	public function menuRecursiveAdd($parent_id = 0, $subMark = '') {
		$data = Menu::where('parent_id', $parent_id)->get();

		foreach($data as $dataItem) {
			$this->html .= '<option value="' . $dataItem->id . '">' . $subMark . $dataItem->name . '</option>';
			$this->menuRecursiveAdd($dataItem->id, $subMark.'--');
		}

		return $this->html;
	}

	public function menuRecursiveEdit($parentIDMenuEdit, $parent_id = 0, $subMark = '') {
		$data = Menu::where('parent_id', $parent_id)->get();

		foreach($data as $dataItem) {
			if ($parentIDMenuEdit == $dataItem->id) {
				$this->html .= '<option selected value="' . $dataItem->id . '">' . $subMark . $dataItem->name . '</option>';

			} else {
				$this->html .= '<option value="' . $dataItem->id . '">' . $subMark . $dataItem->name . '</option>';

			}
			$this->menuRecursiveEdit($parentIDMenuEdit, $dataItem->id, $subMark.'--');
		}

		return $this->html;
	}
}

?>