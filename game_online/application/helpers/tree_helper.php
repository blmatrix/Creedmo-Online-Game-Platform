<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// $parent is the parent of the children we want to see
// $level is increased when we go deeper into the tree,
// used to display a nice indented tree
function display_children($parent, $level) {
    // retrieve all children of $parent
    $result = mysql_query('SELECT title FROM tree ' . 'WHERE parent="' . $parent . '";');

    // display each child
    while ($row = mysql_fetch_array($result)) {
        // indent and display the title of this child
        echo str_repeat(' ', $level) . $row['title'] . "\n";

        // call this function again to display this
        // child's children
        display_children($row['title'], $level + 1);
    }
}

/*
 * 순서화된 수정된 트리 검색 (가로 접근법) . lft(왼쪽), rft(오른쪽) 번호에 따른 노드 표시, 노드 검색, 노드 순회
 */
function display_tree($root) {
    // retrieve the left and right value of the $root node
    $result = mysql_query('SELECT lft, rgt FROM tree ' . 'WHERE title="' . $root . '";');
    $row = mysql_fetch_array($result);

    // start with an empty $right stack
    $right = array();

    // now, retrieve all descendants of the $root node
    $result = mysql_query('SELECT title, lft, rgt FROM tree ' . 'WHERE lft BETWEEN ' . $row['lft'] . ' AND ' . $row['rgt'] . ' ORDER BY lft ASC;');

    // display each row
    while ($row = mysql_fetch_array($result)) {
        // only check stack if there is one
        if (count($right) > 0) {
            // check if we should remove a node from the stack
            while ($right[count($right) - 1] < $row['rgt']) {
                array_pop($right);
            }
        }

        // display indented node title
        echo str_repeat(' ', count($right)) . $row['title'] . "\n";

        // add this node to the stack
        $right[] = $row['rgt'];
    }

    /*
     * 기존 근접 리스트 테이블을 수정된 순서와된 트리 검색 테이블로 빌드
     */
    function rebuild_tree($parent, $left) {
        // the right value of this node is the left value + 1
        $right = $left + 1;

        // get all children of this node
        $result = mysql_query('SELECT title FROM tree ' . 'WHERE parent="' . $parent . '";');
        while ($row = mysql_fetch_array($result)) {
            // recursive execution of this function for each
            // child of this node
            // $right is the current right value, which is
            // incremented by the rebuild_tree function
            $right = rebuild_tree($row['title'], $right);
        }

        // we've got the left value, and now that we've processed
        // the children of this node we also know the right value
        mysql_query('UPDATE tree SET lft=' . $left . ', rgt=' . $right . ' WHERE title="' . $parent . '";');

        // return the right value of this node + 1
        return $right + 1;
    }

}
