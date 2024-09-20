document.getElementById('insuredForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const age = document.getElementById('age').value;
    const phone = document.getElementById('phone').value;

    fetch('index.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ firstName, lastName, age, phone })
    }).then(response => response.json())
      .then(data => {
          const insuredList = document.getElementById('insuredList');
          const listItem = document.createElement('li');
          listItem.textContent = `${firstName} ${lastName}, ${age}, ${phone}`;
          insuredList.appendChild(listItem);
          document.getElementById('insuredForm').reset();
      });
});

