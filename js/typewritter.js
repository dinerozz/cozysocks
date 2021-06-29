let typeout = document.getElementById('typeout');

const outputWords = [
    'Shop is fun',
    'Simply',
    'Fast',
    'Premium socks',
    'The Best High Quality Socks in CIS REGION',
    'Limax'
]

let wordIndex = 0;
let charindex = 0;

printWord()

function printWord(){
    if(outputWords[wordIndex].length > charindex){
        typeout.innerHTML += outputWords[wordIndex].charAt(charindex);
        charindex+=1;
        setTimeout(printWord,150);
    }
    else{
        setTimeout(deleteWord, 100);
    }
}

function deleteWord(){
    if(charindex>=0){
        typeout.innerHTML = outputWords[wordIndex].substr(0, charindex);
        charindex-=1;
        setTimeout(deleteWord, 100);
    }
    else{
        wordIndex+=1;
        if(wordIndex >= outputWords.length){
            wordIndex = 0;
        }
        setTimeout(printWord,150);
    }
}