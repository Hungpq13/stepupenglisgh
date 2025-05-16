 function showPopup(age) {
            const popup = document.getElementById(`popup-${age}`);
            const overlay = document.getElementById('overlay');
            if (popup && overlay) {
                popup.style.display = 'block';
                overlay.style.display = 'block';
            }
        }

        function hidePopup(age) {
            const popup = document.getElementById(`popup-${age}`);
            const overlay = document.getElementById('overlay');
            if (popup && overlay) {
                popup.style.display = 'none';
                overlay.style.display = 'none';
            }
        }

        function hideAllPopups() {
            const popups = document.querySelectorAll('.popup');
            const overlay = document.getElementById('overlay');
            popups.forEach(popup => {
                popup.style.display = 'none';
            });
            if (overlay) {
                overlay.style.display = 'none';
            }
        }
