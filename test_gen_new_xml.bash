dataset=$1
mkdir -p test_xml
for img in $(ls -A1 Images/$dataset/);
do
    if [ "." = $img ] || [ ".." = $img ]; then
	continue
    fi
    
       
    img_xml=${img/jpg/xml}
    echo "creating ${img_xml}"

    echo "<annotation>
  <filename>${img}</filename>
  <folder>${dataset}</folder>
  <source>
    <sourceImage>The MIT-CSAIL database of objects and scenes</sourceImage>
    <sourceAnnotation>LabelMe Webtool</sourceAnnotation>
  </source>
</annotation>
" > test_xml/${img_xml}
done
