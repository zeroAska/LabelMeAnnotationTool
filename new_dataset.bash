
dataset=$1

# step 0:
mkdir Annotations/$dataset
for img in $(ls -A1 $dataset/);
do
    if [ "." = $img ] || [ ".." = $img ]; then
	continue
    fi

    img_xml=${img/jpg/xml}
    echo "creating $img"
    touch Annotations/${dataset}/${img_xml}
    
    echo "<annotation>
  <filename>${img}</filename>
  <folder>${dataset}</folder>
  <source>
    <sourceImage>The MIT-CSAIL database of objects and scenes</sourceImage>
    <sourceAnnotation>LabelMe Webtool</sourceAnnotation>
  </source>
</annotation>
" > Annotations/${dataset}/${img_xml}
done
	   

# step 1:
mv $dataset Images/


# step 2: generate label list in annotationCache/DirList
cd annotationTools/sh
bash populate_dirlist.sh ${dataset}.txt $dataset
cd ../..

# step 3: generate xml template
cd annotationCache/XMLTemplates
cp labelme.xml ${dataset}.xml
cd ../../

# step 4: mk the annotation folder


# step 3:  go to repo root folder, and set write permission
sudo make
