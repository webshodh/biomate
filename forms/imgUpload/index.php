<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photo Upload</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../../global.css" />
</head>
<body>
    <header class="header">
        <div class="logo">My Website</div>
        <div class="profile-container">
          <span class="profile-initials" id="profileInitials"></span>
        </div>
      </header>
    <div id="photo-upload-container" class="photo-upload-container"></div>

    <script>
        // Number of boxes to display
        const numberOfBoxes = 5; // Change this value to 1, 3, or 5

        const container = document.getElementById("photo-upload-container");

        for (let i = 0; i < numberOfBoxes; i++) {
            const box = document.createElement("div");
            box.className = "photo-upload-box";

            const plusIcon = document.createElement("div");
            plusIcon.className = "plus-icon";
            plusIcon.textContent = "+";

            const sizeLimitText = document.createElement("div");
            sizeLimitText.className = "size-limit-text";
            sizeLimitText.textContent = "Photo size limit: 3MB";

            const fileInput = document.createElement("input");
            fileInput.type = "file";
            fileInput.accept = ".jpg,.jpeg,.png";
            fileInput.style.display = "none";
            fileInput.addEventListener("change", (event) => handleFileUpload(event, box));

            const progressBar = document.createElement("div");
            progressBar.className = "progress-bar";
            progressBar.style.display = "none";

            const progress = document.createElement("div");
            progress.className = "progress";
            progressBar.appendChild(progress);

            const imgPreview = document.createElement("img");
            imgPreview.className = "img-preview";
            imgPreview.style.display = "none";

            const deleteIcon = document.createElement("div");
            deleteIcon.className = "delete-icon";
            deleteIcon.textContent = "×"; // Unicode for multiplication sign (×)

            box.appendChild(plusIcon);
            box.appendChild(sizeLimitText);
            box.appendChild(fileInput);
            box.appendChild(progressBar);
            box.appendChild(imgPreview);
            box.appendChild(deleteIcon);

            box.addEventListener("click", () => fileInput.click());
            deleteIcon.addEventListener("click", (event) => {
                event.stopPropagation(); // Prevent click event from triggering the file input
                removeImage(box);
            });

            container.appendChild(box);
        }

        function handleFileUpload(event, box) {
            const file = event.target.files[0];
            if (!file) return;

            if (!["image/jpeg", "image/png"].includes(file.type)) {
                alert("Only JPG, JPEG, and PNG files are allowed.");
                return;
            }

            if (file.size > 3 * 1024 * 1024) {
                alert("File size must be less than 3MB.");
                return;
            }

            const plusIcon = box.querySelector(".plus-icon");
            const sizeLimitText = box.querySelector(".size-limit-text");
            const progressBar = box.querySelector(".progress-bar");
            const progress = box.querySelector(".progress");
            const imgPreview = box.querySelector(".img-preview");
            const deleteIcon = box.querySelector(".delete-icon");

            plusIcon.style.display = "none";
            sizeLimitText.style.display = "none";

            progressBar.style.display = "block";
            imgPreview.style.display = "none";

            const reader = new FileReader();
            reader.onloadstart = () => {
                progress.style.width = "0%";
            };
            reader.onprogress = (event) => {
                if (event.lengthComputable) {
                    const percent = Math.round((event.loaded / event.total) * 100);
                    progress.style.width = `${percent}%`;
                }
            };
            reader.onloadend = () => {
                progress.style.width = "100%";
                imgPreview.src = reader.result;
                imgPreview.style.display = "block";
                progressBar.style.display = "none";
                deleteIcon.style.display = "block"; // Show delete icon
            };
            reader.readAsDataURL(file);
        }

        function removeImage(box) {
            const plusIcon = box.querySelector(".plus-icon");
            const sizeLimitText = box.querySelector(".size-limit-text");
            const progressBar = box.querySelector(".progress-bar");
            const imgPreview = box.querySelector(".img-preview");
            const deleteIcon = box.querySelector(".delete-icon");

            plusIcon.style.display = "block";
            sizeLimitText.style.display = "block";
            progressBar.style.display = "none";
            imgPreview.style.display = "none";
            deleteIcon.style.display = "none";

            // Clear the file input
            const fileInput = box.querySelector("input[type='file']");
            fileInput.value = "";
        }
    </script>
</body>
</html>
