ls | while read filename; do mv "$filename" "`echo $filename | tr "A-Z" "a-z"`"; done 
