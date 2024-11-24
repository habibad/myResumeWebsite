


async function fetchInfo() {
    try {

        const response = await fetch('info.php');
        const info = await response.json();

        const myInfo = document.getElementById('myInfo');

        myInfo.innerHTML = `
            <div class="info-item">
                <strong>Address:</strong> ${info.address}
            </div>
            <div class="info-item">
                <strong>Phone:</strong> ${info.phone}
            </div>
            <div class="info-item">
                <strong>Email:</strong> ${info.email}
            </div>
            <div class="info-item">
                <strong>Website:</strong> ${info.website}
            </div>
        `;

    } catch (error) {
        console.error("Error fetching blogs:", error);
    }
}
fetchInfo();

