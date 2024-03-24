/**
 * Show Drag & Drop multiple image preview
 * 
 * @author Anuj Kumar
 * @link https://instagram.com/webtricks.ak
 * @link https://github.com/wtricks
 * */

/** Variables */
let files = [],
dragArea = document.querySelector('.drag-area'),
input = document.querySelector('.drag-area input'),
button = document.querySelector('.uploadImgCard button'),
select = document.querySelector('.drag-area .select'),
container = document.querySelector('.imgContainer');
console.log("this is file", files)
/** CLICK LISTENER */
select.addEventListener('click', () => input.click());

/* INPUT CHANGE EVENT */
input.addEventListener('change', () => {
	let file = input.files;
        
    // if user select no image
    if (file.length == 0) return;
         
	for(let i = 0; i < file.length; i++) {
        if (file[i].type.split("/")[0] != 'image') continue;
        if (!files.some(e => e.name == file[i].name)) files.push(file[i])
    }

	showImages();
});

/** SHOW IMAGES */
function showImages() {
	container.innerHTML = files.reduce((prev, curr, index) => {
		
		return `${prev}
		    <div class="image">
			    <span onclick="delImage(${index})">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M12 20.8223C6.97266 20.8223 2.83301 16.6826 2.83301 11.6553C2.83301 6.63672 6.97266 2.48828 11.9912 2.48828C17.0186 2.48828 21.167 6.63672 21.167 11.6553C21.167 16.6826 17.0273 20.8223 12 20.8223ZM9.16113 15.3994C9.43359 15.3994 9.65332 15.3115 9.8291 15.1357L12 12.9561L14.1797 15.1357C14.3467 15.3115 14.5752 15.3994 14.8389 15.3994C15.3486 15.3994 15.7441 15.0039 15.7441 14.4854C15.7441 14.248 15.6562 14.0195 15.4805 13.8525L13.292 11.6729L15.4893 9.47559C15.6738 9.29102 15.7529 9.08008 15.7529 8.83398C15.7529 8.33301 15.3574 7.9375 14.8564 7.9375C14.5928 7.9375 14.3906 8.0166 14.2061 8.20117L12 10.3896L9.81152 8.20996C9.63574 8.03418 9.43359 7.94629 9.16113 7.94629C8.66016 7.94629 8.26465 8.3418 8.26465 8.85156C8.26465 9.08008 8.36133 9.30859 8.52832 9.47559L10.7168 11.6729L8.52832 13.8613C8.36133 14.0283 8.26465 14.2568 8.26465 14.4854C8.26465 15.0039 8.66016 15.3994 9.16113 15.3994Z" fill="#C2C5DC"/>
				</svg>
				</span>
			    <img style="width: 100%; height: 100%; object-fit: cover;" src="${URL.createObjectURL(curr)}" />
			</div>`
	}, '');
}

/* DELETE IMAGE */
function delImage(index) {
   files.splice(index, 1);
   showImages();
}

/* DRAG & DROP */
dragArea.addEventListener('dragover', e => {
	e.preventDefault()
	dragArea.classList.add('dragover')
})

/* DRAG LEAVE */
dragArea.addEventListener('dragleave', e => {
	e.preventDefault()
	dragArea.classList.remove('dragover')
});

/* DROP EVENT */
dragArea.addEventListener('drop', e => {
	e.preventDefault()
    dragArea.classList.remove('dragover');

	let file = e.dataTransfer.files;
	for (let i = 0; i < file.length; i++) {
		/** Check selected file is image */
		if (file[i].type.split("/")[0] != 'image') continue;
		
		if (!files.some(e => e.name == file[i].name)) files.push(file[i])
	}
	showImages();
});
