
//ETAPE 81
const playlistSongs = document.getElementById("playlist-songs");
const playButton = document.getElementById("play");
const pauseButton = document.getElementById("pause");
const nextButton = document.getElementById("next");
const previousButton = document.getElementById("previous");
const shuffleButton = document.getElementById("shuffle");

const allSongs = [
    {
        id: 0,
        title: "Lean Startup",
        artist: "Eric Ries",
        duration: "2:59",
        src: "../../templates/audios_retouches/lean_startup_def.mp3",
        audioName:"lean_startup_def.mp3"
    },
    {
        id:1,
        title:"Die empty",
        artist: "Todd Henry",
        src:"../audio/die_empty.mp3",
        duration: "2:31",
        audioName: "die_empty.mp3"
    },
    {
        id:2,
        title:"Alchimiste",
        artist:"Paulo Coelho",
        duration:"2:38",
        src:"../audio/alchimiste.mp3",
        audioName: "alchimiste.mp3"
    },
    {
        id:3,
        title:"Père riche, père pauvre",
        artist:"Robert Kiyosaki",
        duration:"1:35",
        src:"../../templates/audios_retouches/pere_riche_pere_pauvre_def.mp3",
        audioName: "pere_riche_pere_pauvre_def.mp3",
    },
    {
        id:4,
        title:"Comment se faire des amis",
        artist:"Dale Carnegie",
        duration:"3:03",
        src:"../../templates/audios_retouches/how_to_win_friends_def.mp3",
        audioName:"how_to_win_friends_def.mp3"
    }
]

localStorage.setItem("songs",JSON.stringify(allSongs))

/**
 * To store the music on local storage
 */

const addToPlayList = (id, title, author, duration, audio) =>{

  //console.log(audioObject);
  
const search = JSON.parse(localStorage.get("songs")).find((x)=> x.audioName === audio);

for(let i in audioObject){
  alert(audioObject[i])
}

if(search === undefined)
{
  allSongs.push({
    id: id,
    title: title,
    artist: author,
    duration:duration,
    src:"../../templates/audios_retouches/"+ audio,
    audioName:audio
})
}else{
  return;
}

localStorage.setItem("songs",JSON.stringify(allSongs));

}






/**
 *  To make the music engine
 */
const audio = new Audio();


let userData = {
  songs: [...JSON.parse(localStorage.getItem('songs'))],
  currentSong: null,
  songCurrentTime: 0,
};

const playSong = (id) => {
  const song = userData?.songs.find((song) => song.id === id);
  audio.src = song.src;
  audio.title = song.title;

  if (userData?.currentSong === null || userData?.currentSong.id !== song.id) {
    audio.currentTime = 0;
  } else {
    audio.currentTime = userData?.songCurrentTime;
  }
  userData.currentSong = song;
  playButton.classList.add("playing");
  setPlayerDisplay();
  highlightCurrentSong();
  setPlayButtonAccessibleText();
  audio.play();
};



const shuffle = () => {
    userData?.songs.sort(() => Math.random() - 0.5);

    userData.currentSong = null;

    userData.songCurrentTime = 0;

    renderSongs(userData?.songs);

    pauseSong();

    setPlayerDisplay();

    setPlayButtonAccessibleText();
    
};


const setPlayButtonAccessibleText = () => {
    const song = userData?.currentSong || userData?.songs[0];
  
    playButton.setAttribute(
      "aria-label",
      song?.title ? `Play ${song.title}` : "Play"
    );
  };

const pauseSong = () => {
    userData.songCurrentTime = audio.currentTime;
    playButton.classList.remove('playing');
    audio.pause();
};

const renderSongs = (array) => {
  const songsHTML = array
    .map((song)=> {
      return `
      <li id="song-${song.id}" class="playlist-song">
      <button class="playlist-song-info" onclick="playSong(${song.id})">
          <span class="playlist-song-title">${song.title}</span>
          <span class="playlist-song-artist">${song.artist}</span>
          <span class="playlist-song-duration">${song.duration}</span>
      </button>
      <button class="playlist-song-delete" aria-label="Delete ${song.title}" onclick="deleteSong(${song.id})">
          <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="8" fill="#4d4d62"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32587 5.18571C5.7107 4.90301 6.28333 4.94814 6.60485 5.28651L8 6.75478L9.39515 5.28651C9.71667 4.94814 10.2893 4.90301 10.6741 5.18571C11.059 5.4684 11.1103 5.97188 10.7888 6.31026L9.1832 7.99999L10.7888 9.68974C11.1103 10.0281 11.059 10.5316 10.6741 10.8143C10.2893 11.097 9.71667 11.0519 9.39515 10.7135L8 9.24521L6.60485 10.7135C6.28333 11.0519 5.7107 11.097 5.32587 10.8143C4.94102 10.5316 4.88969 10.0281 5.21121 9.68974L6.8168 7.99999L5.21122 6.31026C4.8897 5.97188 4.94102 5.4684 5.32587 5.18571Z" fill="white"/></svg>
        </button>
      </li>
      `;
    })
    .join("");

  playlistSongs.innerHTML = songsHTML;
};

const playNextSong = ()=>{
    if(userData?.currentSong === null){
        playSong(userData?.songs[0].id);
    }else{
        const currentSongIndex = getCurrentSongIndex();
        const nextSong = userData?.songs[currentSongIndex + 1]
        playSong(nextSong.id);
    }
}

const playPreviousSong = ()=>{
    if(userData?.currentSong === null) return ;
        else{
        const currentSongIndex = getCurrentSongIndex();
        const previousSong = userData?.songs[currentSongIndex -1];
        playSong(previousSong.id); 
    }
}

const setPlayerDisplay = () => {
    const playingSong = document.getElementById('player-song-title');
    const songArtist = document.getElementById('player-song-artist')

    const currentTitle = userData?.currentSong?.title;
    const currentArtist = userData?.currentSong?.artist;
    playingSong.textContent = currentTitle? currentTitle : "";
    songArtist.textContent = currentArtist ? currentArtist : "";

}

const highlightCurrentSong = ()=>{
    const playlistSongElements = document.querySelectorAll('.playlist-song');
    const songToHighlight = document.getElementById(`song-${userData?.currentSong?.id}`);

    playlistSongElements.forEach((songEl)=>{
        songEl.removeAttribute('aria-current');
    if(songToHighlight){
        songToHighlight.setAttribute('aria-current','true');
        
    }
    })
  }

const getCurrentSongIndex = () => {
  return userData?.songs.indexOf(userData?.currentSong);
}

const deleteSong = (id)=>{
  if(userData?.currentSong?.id === id){
    userData.currentSong = null;
    userData.songCurrentTime = 0;
    pauseSong();
    setPlayerDisplay();
  }
 userData.songs = userData?.songs.filter((song)=>song.id !== id);
 
 renderSongs(userData?.songs);
 highlightCurrentSong();
 setPlayButtonAccessibleText();

 if(userData?.songs.length === 0){
  const resetButton = document.createElement("button");
  const resetText = document.createTextNode('Reset Playlist');

  resetButton.id="reset";
  resetButton.ariaLabel = "Reset Playlist";

  resetButton.appendChild(resetText);
  playlistSongs.appendChild(resetButton)

  resetButton.addEventListener("click", () => {
    userData.songs = [...allSongs];
    renderSongs(sortSongs());
    setPlayButtonAccessibleText();
    resetButton.remove()
  });
 }
}



playButton.addEventListener("click", () => {
    if (userData?.currentSong === null) {
    playSong(userData?.songs[0].id);
  } else {
    playSong(userData?.currentSong.id);
  }
});


pauseButton.addEventListener('click',pauseSong);

nextButton.addEventListener('click',playNextSong);

previousButton.addEventListener('click',playPreviousSong);

shuffleButton.addEventListener('click',shuffle);

audio.addEventListener("ended", () => {
    const currentSongIndex = getCurrentSongIndex();
    const nextSongExists = userData?.songs[currentSongIndex + 1] !== undefined;
  
      if (nextSongExists) {
        playNextSong()
      } else {
        userData.currentSong = null;
        userData.songCurrentTime = 0; 
        pauseSong();
        setPlayerDisplay();
        highlightCurrentSong();
        setPlayButtonAccessibleText(); 
    }
  })

const sortSongs = () => {
  userData?.songs.sort((a,b) => {
    if (a.title < b.title) {
      return -1;
    }

    if (a.title > b.title) {
      return 1;
    }

    return 0;
  });

  return userData?.songs;
};

renderSongs(sortSongs());


