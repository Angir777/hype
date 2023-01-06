<?php

/**
* @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
*/

class Panel extends db {

  	/**
	 * GetPagination
	 * 
  	 * @param mixed $pageName
  	 * @param mixed $pagination
  	 * @param mixed $productsOnPage
  	 */
  	private function getPagination($pageName, $pagination, $productsOnPage, $l) {

		$result = '';
		$count = 0;

		$sql = "SELECT * FROM ".DB_PREFIX."_users";
		$statement = $this->connect()->prepare($sql);
		$statement->execute();
		$count = $statement->rowCount();

		$numberOfPages = ceil($count/$productsOnPage);
		if (empty($pagination)) { $pagination = 1; }

		if ($numberOfPages > 1) {
			$result .= '
				<div class="row m10">
					<div class="col">
						<div class="blog_pagination shop_pagination">
			';
			if ($pagination > 1) {
					$result .= '
						<div>
							<a class="btn btn-default btn-style2 pill-btn" rel="" href="'.URL.$pageName.'/'.$l['pagination_page'].'/'.($pagination-1).'">
								<span class="btn_pagination"><i class="pdl-pagination fas fa-long-arrow-alt-left"></i></span>
							</a>
						</div>
					';
			} else {
				$result .= '
					<div>
						<span class="btn btn-default btn-style2 pill-btn disabled">
							<span class="btn_pagination"><i class="pdl-pagination fas fa-long-arrow-alt-left"></i></span>
						</span>
					</div>
				';
			}
			if ($pagination < $numberOfPages) {
					$result .= '
						<div>
							<a class="btn btn-default btn-style2 pill-btn" rel="" href="'.URL.$pageName.'/'.$l['pagination_page'].'/'.($pagination+1).'">
								<span class="btn_pagination"><i class="pdl-pagination fas fa-long-arrow-alt-right"></i></span>
							</a>
						</div>
					';
			} else {
				$result .= '
					<div>
						<span class="btn btn-default btn-style2 pill-btn disabled">
							<span class="btn_pagination"><i class="pdl-pagination fas fa-long-arrow-alt-right"></i></span>
						</span>
					</div>
				';
			}
			$result .= '
						</div>
					</div>
				</div>
			';
		}

		return $result;

	}
	
  	/**
	 * GetUsers
	 * 
  	 * @param mixed $pagination
  	 * @param mixed $pageName
  	 */
  	public function getUsers($pagination, $pageName, $l) {

  		$result = '';

  		// pagination
		$productsOnPage = 10;
		if(empty($pagination)){ $pagination = 1; }
		$startAt = ($pagination-1) * $productsOnPage;

  		$sql = "SELECT * FROM ".DB_PREFIX."_users ORDER BY id_user ASC LIMIT $startAt, $productsOnPage";
	    $statement = $this->connect()->prepare($sql);
	    $statement->execute();
	    $answer = $statement->fetchAll(PDO::FETCH_ASSOC);

	    $i = 1;
	    if (!empty($answer)) {

			foreach ($answer as $data) {

				$id_user = $data['id_user'];
				$user_login = $data['user_login'];
				
				$result .= '
					<tr>
						<th scope="row" style="width:10%">'.$id_user.'</th>
						<td style="width:90%">'.$user_login.'</td>
					</tr>
				';

				$i++;

			}

			$result .= $this->getPagination($pageName, $pagination, $productsOnPage, $l);

			return $result;
		
		} else {

			return $result;

		}

  	}

}