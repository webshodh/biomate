// User's name
const userName = "Virat Kohli";

// Function to get the initials from the name
function getInitials(name) {
  const nameArray = name.split(" ");
  const initials = nameArray[0].charAt(0) + nameArray[1].charAt(0);
  return initials.toUpperCase();
}

// Set the initials in the profile section
document.getElementById("profileInitials").innerText = getInitials(userName);
