
img_folder_name=$1

img_names=$(ls ${img_folder_name}/*.jpg)
for name in ${img_names}
do
    echo "$1,${name}" >> labelme.txt
done

	
