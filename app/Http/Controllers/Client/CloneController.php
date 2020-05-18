<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;

class CloneController extends Controller
{
	public function __construct()
	{
		$this->congNghe = 1;
		$this->doiSong = 2;
		$this->khamPha = 3;
		$this->khoaHoc = 4;
		$this->biAn = 5;
		$this->yHoc = 6;
		$this->congNgheMoi = 7;
		$this->phanMem = 8;
		$this->khoaHocMayTinh = 9;
		$this->phatMinh = 10;
		$this->Ai = 11;
		$this->sinhVatHoc = 12;
		$this->khaoCoHoc = 13;
		$this->daiDuongHoc = 14;
		$this->theGioiDongVat = 15;
		$this->danhNhanTheGioi = 16;
		$this->ngayTanThe = 17;
		$this->chinhPhucNgoiSao = 18;
		$this->kyQuanTheGioi = 19;
		$this->nguoiNgoaiHanhTinh = 20;
		$this->tracNghiemKhoaHoc = 21;
		$this->lichSu = 22;
		$this->khoaHocQuanSu = 23;
		$this->benh = 24;
		$this->moiTruong = 25;
		$this->benhUngThu = 26;
		$this->ungDungKhoaHoc = 27;
		$this->khoaHocVaBanDoc = 28;
		$this->congTrinhKhoaHoc = 29;
		$this->cauChuyenKhoaHoc = 30;
		$this->suKienKhoaHoc = 31;
		$this->thuVienAnh = 32;
		$this->gocHaiHuoc = 33;
		$this->video = 34;
		$this->server = 'http://static.dammekhoahoc.net/';
	}

    public function clone(Request $request)
    {
    	$this->cloneCongNghe('https://khoahoc.tv/khoa-hoc-quan-su', $this->khoaHocQuanSu);
    // 	$this->cloneCongNghe('https://khoahoc.tv/lich-su', $this->lichSu);
    // 	$this->cloneCongNghe('https://khoahoc.tv/trac-nghiem-khoa-hoc', $this->tracNghiemKhoaHoc);
    // 	$this->cloneCongNghe('https://khoahoc.tv/nguoi-ngoai-hanh-tinh', $this->nguoiNgoaiHanhTinh);
    // 	$this->cloneCongNghe('https://khoahoc.tv/di-san-the-gioi', $this->kyQuanTheGioi);
    // 	$this->cloneCongNghe('https://khoahoc.tv/chinh-phuc-sao-hoa', $this->chinhPhucNgoiSao);
    // 	$this->cloneCongNghe('https://khoahoc.tv/ngay-tan-the', $this->ngayTanThe);
    // 	$this->cloneCongNghe('https://khoahoc.tv/danh-nhan-the-gioi', $this->danhNhanTheGioi);
    // 	$this->cloneCongNghe('https://khoahoc.tv/the-gioi-dong-vat', $this->theGioiDongVat);
    // 	$this->cloneCongNghe('https://khoahoc.tv/dai-duong-hoc', $this->daiDuongHoc);
    // 	$this->cloneCongNghe('https://khoahoc.tv/khao-co-hoc', $this->khaoCoHoc);
    // 	$this->cloneCongNghe('https://khoahoc.tv/sinh-vat-hoc', $this->sinhVatHoc);
    // 	$this->cloneCongNghe('https://khoahoc.tv/ai-tri-tue-nhan-tao', $this->Ai);
    // 	$this->cloneCongNghe('https://khoahoc.tv/phat-minh', $this->phatMinh);
    // 	$this->cloneCongNghe('https://khoahoc.tv/may-tinh', $this->khoaHocMayTinh);
    // 	$this->cloneCongNghe('https://khoahoc.tv/phan-mem', $this->phanMem);
    // 	$this->cloneCongNghe('https://khoahoc.tv/cong-nghe-moi', $this->congNgheMoi);
    // 	$this->cloneCongNghe('https://khoahoc.tv/yhoc', $this->yHoc);
    // 	$this->cloneCongNghe('https://khoahoc.tv/1001-bi-an', $this->biAn);
    // 	$this->cloneCongNghe('https://khoahoc.tv/vu-tru', $this->khoaHoc);
    // 	$this->cloneCongNghe('https://khoahoc.tv/kham-pha-khoa-hoc', $this->khamPha);
    // 	$this->cloneCongNghe('https://khoahoc.tv/doi-song', $this->doiSong);
    // 	$this->cloneCongNghe('https://khoahoc.tv/cong-nghe', $this->congNghe);
    	
    	// $this->cloneCongNghe('https://khoahoc.tv/benh-va-cach-chua', $this->benh);
    	// $this->cloneCongNghe('https://khoahoc.tv/moi-truong', $this->moiTruong);
    	// $this->cloneCongNghe('https://khoahoc.tv/benh-ung-thu', $this->benhUngThu);
    	// $this->cloneCongNghe('https://khoahoc.tv/ung-dung', $this->ungDungKhoaHoc);
    	// $this->cloneCongNghe('https://khoahoc.tv/ban-doc-khoa-hoc', $this->khoaHocVaBanDoc);
    	// $this->cloneCongNghe('https://khoahoc.tv/cong-trinh', $this->congTrinhKhoaHoc);
    	// $this->cloneCongNghe('https://khoahoc.tv/cau-chuyen', $this->cauChuyenKhoaHoc);
    	// $this->cloneCongNghe('https://khoahoc.tv/su-kien-khoa-hoc', $this->suKienKhoaHoc);
    	// $this->cloneCongNghe('https://khoahoc.tv/thu-vien-anh', $this->thuVienAnh);
     //    $this->cloneCongNghe('https://khoahoc.tv/hai-huoc', $this->gocHaiHuoc);
    	// $this->cloneCongNghe('https://khoahoc.tv/video', $this->video);
    }

    public function cloneCongNghe($link, $categoryId)
    {
    	$html = file_get_html($link);
    	$domain = 'https://khoahoc.tv';

    	foreach ($html->find('.listview .listitem') as $link)
    	{
    		$linkFull = $domain . $link->find('a', 0)->href;
    		$thumbnail = $link->find('.thumb img', 0)->src;
    		$this->getData($linkFull, $thumbnail, $categoryId);
    	}
    }

    public function getData($link, $thumbnail, $categoryId)
    {
    	try {
    		$html = file_get_html($link);
    		$check = $this->checkLink(md5($link));
    		$listRand = $listImgAndContent = $listImgSoure = $listImage = array();

    		if ($check == 0) {
    			if (!empty($html->find('.author-info'))) {
    				$author = html_entity_decode($html->find('.author-info .author', 0)->plaintext);
    				$date = $html->find('.author-info .date', 0)->plaintext;
    				$date = trim(explode(':', $date)[1]);
    				$date = str_replace('/', '-', $date);
    				$date = date('Y-m-d', strtotime($date));
    			} else {
    				$date = date('Y-m-d');
    				$author = 'diembao24h.net';
    			}
    			$folder = date('Y-m', strtotime($date));
    			//$this->createFolder($folder);

    			if (!empty($html->find('#main .content'))) {
    				$title = trim(html_entity_decode($html->find('.content h1', 0)->plaintext));
    				$summury = $html->find("meta[name='description']", 0)->content;
    				$content = $html->find('.content-detail', 0)->innertext();
    				$keyword = $html->find("meta[name='keywords']", 0)->content;
    				$nameImage = $slug = str_slug($title);

    				if (!empty($html->find("meta[property='og:image']"))) {
    					$og_image = $html->find("meta[property='og:image']", 0)->content;
    				} else {
    					$og_image = $thumbnail;
    				}

    				if (!empty($html->find('.content-detail p[style="text-align: center;"]'))) {
    					foreach ($html->find('.content-detail p[style="text-align: center;"]') as $thumb) {
	    					if (!empty($thumb->find('img'))) {
	    						try {
	    							$alt = $thumb->find('img', 0)->alt;
	    							$img = $thumb->find('img', 0)->src;
	    							$rand = rand();
				    				$path = $this->server . "photos/images/$folder/$nameImage-$rand.jpg";
				    				$thumbItem = html_entity_decode($thumb->outertext);

				    				if ($alt != '') {
										$noteImage = '<p class="note-image">' . $alt . '</p>';
									} else {
										$noteImage = '';
									}

									if ($img != '') {
										$imgTag = "<p class='image-detail'><img src=$path alt='$alt' title='$title' alt='$noteImage'></p>";
										$imgSoure = "<p class='image-detail'><img src=$img alt='$nameImage' title='$title' alt='$noteImage'></p>";
									} else {
										$img = '';
										$imgTag = '';
										$imgSoure = '';
									}
	    						} catch (\Exception $e) {
	    							$imgTag = '';
									$noteImage = '';
									$imgSoure = '';
	    						}
	    						$listRand[$rand] = $rand;
								$listImgAndContent[$rand] = $imgTag . $noteImage;
								$listImgSoure[$rand] = $imgSoure . $noteImage;
								$listImage[$rand] = $img;
								$content = str_replace($thumbItem, '<p>' . $rand . '</p>', $content);
	    					}
	    					
	    					if (!empty($thumb->find('video'))) {
	    						try {
	    							$rand = rand();
				    				$thumbItem = html_entity_decode($thumb->innertext);
	    						} catch (\Exception $e) {
	    							$imgTag = '';
									$imgSoure = '';
	    						}
	    						$listRand[$rand] = $rand;
								$listImgAndContent[$rand] = '<p class="video-detail">' . $thumbItem . '</p>';
								$listImgSoure[$rand] = '<p class="video-detail">' . $thumbItem . '</p>';
								$content = str_replace($thumbItem, '<p class="video-detail">' . $rand . '</p>', $content);
	    					}
	    					if (!empty($thumb->find('iframe'))) {
	    						try {
	    							$rand = rand();
				    				$thumbItem = html_entity_decode($thumb->innertext);
	    						} catch (\Exception $e) {
	    							$imgTag = '';
									$imgSoure = '';
	    						}
	    						$listRand[$rand] = $rand;
								$listImgAndContent[$rand] = '<p class="video-detail">' . $thumbItem . '</p>';
								$listImgSoure[$rand] = '<p class="video-detail">' . $thumbItem . '</p>';
								$content = str_replace($thumbItem, '<p class="video-detail">' . $rand . '</p>', $content);
	    					}	    	
						}
    				}
					$content = str_replace('<br>', '', $content);
					$content = str_replace($summury, '', $content);
					$htmlTagExeption = array('article', 'figure', 'html', 'head', 'meta', 'body', 'strong', 'em', 'a', 'span', 'i', 'div', 'font', 'b', 'table', 'tr', 'td', 'tbody', 'ul', 'script', 'ins', 'u', 'br', 'sub', 'iframe');
					$contentInsert = $this->getContentInsert($content, $htmlTagExeption, $listRand, $listImgAndContent, $listImage);
					session()->flush();
					$contentSoure = $this->getContentInsert($content, $htmlTagExeption, $listRand, $listImgSoure, $listImage);
					session()->flush();
					$result = $this->insertPost($title, $slug, $summury, $contentInsert, $nameImage . '.jpg', $keyword, $link, $date, $categoryId, $thumbnail, $author, $contentSoure);

					if (!empty($result)) {
						$alert = $this->uploadThumbnail($og_image, $listImage, $listRand, $nameImage, $thumbnail, $folder, $result);

						if (!empty($alert)) {
							echo $alert . ' <b>khoahoc.tv</b><hr>';
						} else {
							$this->deletePost($result->id);
							echo 'Ảnh lỗi nên không thêm tin này:' . $link . '<hr>';
						}
					} else {
						echo "Thêm thất bại: $link<hr>";
					}
    			}
    		} else {
    			echo "Tin này đã thêm: $link<hr>";
    		}
    	} catch (\Exception $e) {
    		echo 'Lỗi dòng link: ' . $link . '<br>';
    		echo 'Dòng: ' . $e->getLine() . '<br>';
    		echo 'Lỗi ' . $e->getMessage() . '<br>';
    		echo '<hr>';
    	}
    }

    public function insertPost($title, $slug, $summury, $contentInsert, $nameImage, $keyword, $link, $date, $categoryId, $thumbnail, $author, $contentSoure)
    {
    	try {
    		return News::create(
	    		[
	    			'title' => $title,
					'slug' => $slug,
					'image' => $nameImage,
					'summury' => $summury,
					'content' => $contentInsert,
					'content_origin' => $contentSoure,
					'category_id' => $categoryId,
					'keyword' => $keyword,
					'link' => $link,
					'md5_link' => md5($link),
					'author' => $author,
					'date' => $date
	    		]
	    	);
    	} catch (\Exception $e) {
    		return NULL;
    	}
    }

    public function getContentInsert($content, $htmlTagExeption, $listRand, $listImgAndContent, $listImage)
    {
    	$contentInsert = '';
		$dom = new \DOMDocument;
		libxml_use_internal_errors(true);
		$dom->loadHTML('<meta http-equiv="Content-Type" content="charset=utf-8" />' . $content);
		$allElements = $dom->getElementsByTagName('*');
		$elementDistribution = array();
		$stt = 0;

		foreach($allElements as $element){
			$tagName = $element->tagName;

			if (!in_array($tagName, $htmlTagExeption)) {
				if (session()->has($tagName)) {
					$element = session($tagName) + 1;
				} else {
					$element = $stt;
				}
				if (isset($dom->getElementsByTagName($tagName)->item($element)->textContent) || $dom->getElementsByTagName($tagName)->item($element)->textContent != '') {
					$p = html_entity_decode(trim($dom->getElementsByTagName($tagName)->item($element)->textContent), ENT_QUOTES, 'UTF-8');

					if (count($listRand) > 0) {
						if (isset($listRand[$p]) && $p == $listRand[$p]) {
							$contentInsert = $contentInsert . str_replace($listRand[$p], $listImgAndContent[$p], $p);
						} else {
							$contentInsert = $contentInsert . '<' . $tagName . '>' . $p . '</' . $tagName . '>';
						}
					} else {
						$contentInsert = $contentInsert . '<' . $tagName . '>' . $p . '</' . $tagName . '>';
					}
					
					session()->put($tagName, $element);
				}
			}
		}

		return html_entity_decode($contentInsert, ENT_QUOTES, 'UTF-8');
    }

    public function checkLink($md5Link)
    {
    	$check = News::where('md5_link', $md5Link)->get();

    	return count($check);
    }

    public function createFolder($folder)
    {
    	if (!file_exists('upload/images/' . $folder)) {
		    mkdir('upload/images/' . $folder, 0777, true);
		}
    }

    public function uploadThumbnail($og_image, $listImage, $listRand, $nameImage, $thumbnail, $folder, $result)
    {
    	try {
    		$arrContextOptions=array(
			    "ssl"=>array(
			        "verify_peer"=>false,
			        "verify_peer_name"=>false,
			    ),
			);

    		if (count($listImage) > 0) {
				foreach ($listImage as $key => $img) {
					if ($img != '') {
						$fullpath = 'photos/images/' . $folder . '/' . $nameImage . '-' . $listRand[$key] . '.jpg';
						\Storage::disk('s3')->put($fullpath, file_get_contents($img, false, stream_context_create($arrContextOptions)), 'public');
						// $put_img = file_get_contents($img, false, stream_context_create($arrContextOptions));
						// file_put_contents(public_path("upload/images/$folder/" . $nameImage . '-' . $listRand[$key] . '.jpg'), $put_img);
					}
				}
			}
			$fillPathThumb = 'photos/thumbnails/' . $nameImage . '.jpg';
			\Storage::disk('s3')->put($fillPathThumb, file_get_contents($thumbnail, false, stream_context_create($arrContextOptions)), 'public');

			// $put_thumbnail = file_get_contents($thumbnail, false, stream_context_create($arrContextOptions));
			// file_put_contents(public_path("upload/thumbnails/" . $nameImage . '.jpg'), $put_thumbnail);

			$filePathOgImage = 'photos/og_images/' . $nameImage . '.jpg';
			\Storage::disk('s3')->put($filePathOgImage, file_get_contents($og_image, false, stream_context_create($arrContextOptions)), 'public');

			// $put_og_image = file_get_contents($og_image, false, stream_context_create($arrContextOptions));
			// file_put_contents(public_path("upload/og_images/" . $nameImage . '.jpg'), $put_og_image);

			return 'Thêm tin thành công';
    	} catch (\Exception $e) {
    		return NULL;
    	}
    }

    public function deletePost($newsId)
	{
		$post = News::findOrFail($newsId);
		$image = $post->image;

		if (Storage::disk('s3')->exists($this->server . 'photos/thumbnails/' . $image)) {
	        Storage::disk('s3')->delete($this->server . 'photos/thumbnails/' . $image);
	    }

	    if (Storage::disk('s3')->exists($this->server . 'photos/og_images/' . $image)) {
	        Storage::disk('s3')->delete($this->server . 'photos/og_images/' . $image);
	    }
		// if (file_exists(public_path('upload/thumbnails/' . $image))) {
		// 	unlink(public_path('upload/thumbnails/' . $image));
		// }
		// if (file_exists(public_path('upload/og_images/' . $image))) {
		// 	unlink(public_path('upload/og_images/' . $image));
		// }
		$link = route('detail', [
											'slug' => $post->slug, 
											'sub' => $post->id
										]);
		$html = file_get_html($link);

		if (!empty($html->find('.body-content .image-detail img'))) {
			foreach ($html->find('.body-content .image-detail img') as $image) {
				$img = $image->src;

				// if (file_exists(public_path($img))) {
				// 	unlink(public_path($img));
				// }
				if (Storage::disk('s3')->exists($img)) {
			        Storage::disk('s3')->delete($img);
			    }
			}
		}
	}
}
