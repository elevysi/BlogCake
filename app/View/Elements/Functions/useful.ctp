<?php 
/**
 * Character Limiter
 *
 * Limits the string based on the character count.  Preserves complete words
 * so the character count may not be exactly as specified.
 *
 * @access   public
 * @param    string
 * @param    integer
 * @param    string  the end character. Usually an ellipsis
 * @return   string
 */

function truncate_html($s, $l, $e = '&hellip;', $isHTML = true) {
	$s = trim($s);
	$e = (strlen(strip_tags($s)) > $l) ? $e : '';
	$i = 0;
	$tags = array();

	if($isHTML) {
		preg_match_all('/<[^>]+>([^<]*)/', $s, $m, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
		foreach($m as $o) {
			if($o[0][1] - $i >= $l) {
				break;
			}
			$t = substr(strtok($o[0][0], " \t\n\r\0\x0B>"), 1);
			if($t[0] != '/') {
				$tags[] = $t;
			}
			elseif(end($tags) == substr($t, 1)) {
				array_pop($tags);
			}
			$i += $o[1][1] - $o[0][1];
		}
	}
	$output = substr($s, 0, $l = min(strlen($s), $l + $i)) . (count($tags = array_reverse($tags)) ? '</' . implode('></', $tags) . '>' : '') . $e;
	return $output;
}

?>