let audioContainer = document.getElementById('audioContainer');


let generateAudioEntrepreneurs = () => {
    return (audioContainer.innerHTML = `

        <div class="sub-field-audio-book">
                    <button class="field">Production</button>
                    <button class="field">Marketing</button>
                    <button class="field">Vente</button>
        </div>
        `+audioEntrepreneursData.map((x)=>{
        let {audio,desc,id,img, title} = x;
        return `
                
                <div class="audio_book">
                    <h3 class="title_audio">${title}:</h3>
                    <div class="image-and-content">
                            <img src="../../templates/images/${img}" class="book_image"  
                            alt="${title}" loading="lazy" width="100">
                        <div class="audio_description">
                            <audio src="../../templates/audio/${audio}" controls></audio>
                            <p>${desc}</p>
                        </div>
                    </div>
                    <div class="add_icon">
                        <span class="add_audio">+</span>
                    </div>
                </div>
        `
    }).join(""));
}

generateAudioEntrepreneurs();