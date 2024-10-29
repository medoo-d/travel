function showForm(formId) {
    const forms = {
        userForm: `
        <div class="form-container">
        <h2>إضافة مستخدم جديد</h2>
        <form action="add_user.php" method="post">
            <div class="form-group">
                <label for="username">اسم المستخدم</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="user-type">نوع المستخدم</label>
                <select id="user-type" name="user-type" required>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">إضافة</button>
            </div>
        </form>
    </div>
        `,
        updateUserForm: `
    <div class="form-container">
    <h2>تحديث بيانات المستخدم</h2>
    <button onclick="loadUsers()">عرض المستخدمين</button>
    <select id="user-list" onchange="loadUserData()">
        <!-- سيتم ملء هذه القائمة بالمستخدمين من قاعدة البيانات -->
    </select>
    <form action="update_user.php" method="post">
        <div class="form-group">
            <label for="user-id">معرف المستخدم</label>
            <input type="text" id="user-id" name="user-id" readonly>
        </div>
        <div class="form-group">
            <label for="username">اسم المستخدم</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">كلمة المرور</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="role">نوع المستخدم</label>
            <select id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="employee">Employee</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit">تحديث</button>
        </div>
    </form>
</div>
        `,
        deleteUserForm: `
        <div class="form-container">
        <h2>حذف بيانات المستخدم</h2>
        <button onclick="loadUsers()">عرض المستخدمين</button>
        <select id="user-list" onchange="loadUserData()">
            <!-- سيتم ملء هذه القائمة بالمستخدمين من قاعدة البيانات -->
        </select>
        <form action="delete_user.php" method="post">
            <div class="form-group">
                <label for="user-id">معرف المستخدم</label>
                <input type="text" id="user-id" name="user-id" readonly>
            </div>
            <div class="form-group">
                <label for="username">اسم المستخدم</label>
                <input type="text" id="username" name="username" readonly>
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور</label>
                <input type="password" id="password" name="password" readonly>
            </div>
            <div class="form-group">
                <label for="role">نوع المستخدم</label>
                <select id="role" name="role" readonly>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" style="background-color: red;">حذف</button>
            </div>
        </form>
    </div>    
        `,
        offerForm:`
        <div class="form-container">
    <h2>إضافة عرض جديد</h2>
    <form action="add_offer.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="short_text">النص القصير</label>
            <input type="text" id="short_text" name="short_text" required>
        </div>
        <div class="form-group">
            <label for="long_text">النص الطويل</label>
            <textarea id="long_text" name="long_text" required></textarea>
        </div>
        <div class="form-group">
            <label for="description">الوصف</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="image_url">رابط الصورة</label>
            <input type="file" id="image_url" name="image_url" accept="image/*" required onchange="previewImage(event)">
            <img id="image_preview" src="#" alt="صورة مصغرة" style="display:none; margin-top:10px; max-width:100px;">
        </div>
        <div class="form-group">
            <button type="submit">إضافة</button>
        </div>
    </form>
</div>

        `
        ,

        // أضف باقي النماذج هنا بنفس الطريقة
    };

    document.getElementById('formContainer').innerHTML = forms[formId];
    window.scrollTo(0, document.getElementById('formContainer').offsetTop);
}



function loadUsers() {
    fetch('load_users.php')
        .then(response => response.json())
        .then(data => {
            let userList = document.getElementById('user-list');
            userList.innerHTML = '';
            data.forEach(user => {
                let option = document.createElement('option');
                option.value = user.user_id;
                option.textContent = user.username;
                userList.appendChild(option);
            });
        });
}

function loadUserData() {
    let userId = document.getElementById('user-list').value;
    fetch(`load_user_data.php?user_id=${userId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('user-id').value = data.user_id;
            document.getElementById('username').value = data.username;
            document.getElementById('password').value = data.password;
            document.getElementById('role').value = data.role;
        });
}

