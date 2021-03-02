const modal = new tingle.modal();

modal.setContent(
'<form action="https://abubakr.vakhid.digital/portfolio/multi-site-form/lead.php" method="post">' +
    '<label for="phone">Enter your name:<label>' +
    '<input type="text" id="name" name="name"' +
    '       required><br>' +
    '<label for="phone">Enter your phone number:</label>' +
    '<input type="tel" id="phone" name="phone"' +
    '       pattern="\\+7\\([0-9]{3}\\)[0-9]{3}-[0-9]{4}"' +
    '       required>' +
    '<small>Format: +7(xxx)xxx-xxxx</small><br>' +
    '<button type="submit" name="lead">Submit</button>' +
    '</form>'
);

const openModal = () => {
    modal.open();
};
