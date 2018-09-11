
find -name '*.jpt' -exec sh -c 'mv "$0" "${0%.jpt}.jpg"' {} \;
