
      // Populate the HTML elements with the user profile data
      const profileNameElements = document.getElementsByClassName('profile-name');
      for (let i = 0; i < profileNameElements.length; i++) {
        profileNameElements[i].textContent = namee;
      }

      const profileEmailElements = document.getElementsByClassName('profile-email');
      for (let i = 0; i < profileEmailElements.length; i++) {
        profileEmailElements[i].textContent = email;
      }

      const profileUsernameElements = document.getElementsByClassName('profile-username');
      for (let i = 0; i < profileUsernameElements.length; i++) {
        profileUsernameElements[i].textContent = userId;
      }

      const profileRoleElements = document.getElementsByClassName('profile-role');
      for (let i = 0; i < profileRoleElements.length; i++) {
        profileRoleElements[i].textContent = role;
      }

      document.getElementById('profile-picture').src = profile_picture;
      document.getElementById('bio').innerHTML = UserId;
      // document.getElementById('field-of-research').textContent = field_of_research;
  

