<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>
<section class="login-form">
    <div class="login-container">
        <div class="login-wrapper">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6c9025a93e47f86b608e7d7a7897dc40bf40830dbf548a0d3bb8b76756f1aeab?placeholderIfAbsent=true&apiKey=c4e4ce5170a7404fac6bdd6b94daba06" alt="" class="background-image" />
            <div class="logo-container">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e83a8f67d438df0b53b77d0fbd804dadb0a7fefcdc2024177decf1390bb7f60d?placeholderIfAbsent=true&apiKey=c4e4ce5170a7404fac6bdd6b94daba06" alt="Company logo" class="logo-image" />
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d569fb41678253f61a4718a98ee18e63554a7b4959c769bcc793a180f863c23c?placeholderIfAbsent=true&apiKey=c4e4ce5170a7404fac6bdd6b94daba06" alt="Secondary logo" class="secondary-logo" />
            </div>
            <div class="password-toggle">
                <label for="show-password-checkbox" class="show-password">Show Password</label>
                <input type="checkbox" id="show-password-checkbox" class="checkbox" aria-label="Show password" />
            </div>
            <form class="login-form-container">
                <div class="input-wrapper">
                    <label for="username-input" class="visually-hidden">Username</label>
                    <input type="text" id="username-input" class="input-field" placeholder="USERNAME" aria-label="Enter your username" />
                </div>
                <div class="input-wrapper password-wrapper">
                    <label for="password-input" class="visually-hidden">Password</label>
                    <input type="password" id="password-input" class="input-field" placeholder="PASSWORD" aria-label="Enter your password" />
                </div>
                <button type="submit" class="login-button">
                    <span class="login-text">LOGIN</span>
                </button>
            </form>
        </div>
    </div>
</section>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>