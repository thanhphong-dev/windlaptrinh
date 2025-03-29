document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        const successAlert = document.getElementById("success-alert");
        if (successAlert) {
            setTimeout(() => successAlert.remove(), 200);
        }
    }, 2000); // Thời gian hiển thị alert là 5 giây
});

$(document).ready(function () {
    $(".btn-edit-permission").on("click", function () {
        var permissionId = $(this).data("id");
        var permissionName = $(this).data("name");
        var permissionSlug = $(this).data("slug");
        var permissionDescription = $(this).data("description");

        //value => modal
        $('#editPermissionModal input[name="id"]').val(permissionId);
        $('#editPermissionModal input[name="name"]').val(permissionName);
        $('#editPermissionModal input[name="slug"]').val(permissionSlug);
        $('#editPermissionModal textarea[name="description"]').val(
            permissionDescription
        );

        tinymce.remove("#mytextareaEditPermission"); 
        tinymce.init({
            selector: "#mytextareaEditPermission",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(permissionDescription); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        $("#editPermissionModal").modal("show");
    });

    $(".btn-edit-role").on("click", function () {
        // Lấy thông tin từ data attribute
        var roleId = $(this).data("id");
        var roleName = $(this).data("name");
        var roleDescription = $(this).data("description");
        var rolePermissions = $(this).data("permissions"); // Danh sách permission_id

        console.log("List role permission", rolePermissions);
        // Gán giá trị cho các input trong modal
        $('#editRoleModal input[name="id"]').val(roleId);
        $('#editRoleModal input[name="name"]').val(roleName);

        // Reset tất cả checkbox về unchecked
        $('#editRoleModal input[type="checkbox"]').prop("checked", false);

        // Đánh dấu các quyền đã lưu
        if (rolePermissions && Array.isArray(rolePermissions)) {
            rolePermissions.forEach(function (permissionId) {
                $('#editRoleModal input[value="' + permissionId + '"]').prop(
                    "checked",
                    true
                );
            });
        }

        tinymce.remove("#mytextareaEditRole"); 
        tinymce.init({
            selector: "#mytextareaEditRole",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(roleDescription); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        // Hiển thị modal
        $("#editRoleModal").modal("show");
    });

    $(".btn-edit-position").on("click", function () {
        var positionId = $(this).data("id");
        var positionName = $(this).data("name");
        var positionDescription = $(this).data("description");

        //value => modal
        $('#editPositionModal input[name="id"]').val(positionId);
        $('#editPositionModal input[name="name"]').val(positionName);

        tinymce.remove("#mytextareaEditPosition"); 
        tinymce.init({
            selector: "#mytextareaEditPosition",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(positionDescription); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        $("#editPositionModal").modal("show");
    });

    //edit user

    $(".btn-edit-user").on("click", function () {
        // Lấy dữ liệu từ data-attributes của nút
        var userId = $(this).data("id");
        var userName = $(this).data("name");
        var userEmail = $(this).data("email");
        var userPassword = $(this).data("password");
        var userPositionId = $(this).data("position_id");
        var userRoleId = $(this).data("role_id");
        var userImage = $(this).data("image");

        console.log("Role ID:", userRoleId);
        console.log("Position ID:", userPositionId);

        // Đường dẫn gốc tới ảnh
        var basePath =
            "http://localhost/project/website/2024/waikiki/public/images/employee/";

        // Gán dữ liệu vào modal
        $('#editUserModal input[name="id"]').val(userId);
        $('#editUserModal input[name="name"]').val(userName);
        $('#editUserModal input[name="email"]').val(userEmail);
        $('#editUserModal input[name="password"]').val(userPassword);

        $('#editUserModal select[name="position_id"]')
            .val(userPositionId)
            .change();
        $('#editUserModal select[name="role_id"]').val(userRoleId).change();

        // Hiển thị ảnh hiện tại nếu có
        if (userImage) {
            $("#current_image")
                .attr("src", basePath + userImage)
                .show();
        } else {
            $("#current_image").hide();
        }

        // Hiển thị modal
        $("#editUserModal").modal("show");
    });

    //edit categories post
    $(".btn-edit-categories-post").on("click", function () {
        var categoryId = $(this).data("id");
        var categoryName = $(this).data("name");
        var categoryDescription = $(this).data("description");

        //value => modal
        $('#editCategoryPostModal input[name="id"]').val(categoryId);
        $('#editCategoryPostModal input[name="name"]').val(categoryName);

        tinymce.remove("#mytextareaEditCategory"); 
        tinymce.init({
            selector: "#mytextareaEditCategory",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(categoryDescription); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        $("#editCategoryPostModal").modal("show");
    });

    //edit post
    $(".btn-edit-post").on("click", function () {
        var postId = $(this).data("id");
        var postTitleVi = $(this).data("title_vi");
        var postTitleEn = $(this).data("title_en");
        var postNoteVi = $(this).data("note_vi");
        var postNoteEn = $(this).data("note_en");
        var postContentVi = $(this).data("content_vi");
        var postContentEn = $(this).data("content_en");
        var categoryId = $(this).data("category_id");

        console.log("Id category post", categoryId);

        $('#editPostModal input[name="id"]').val(postId);
        $('#editPostModal input[name="title_vi"]').val(postTitleVi);
        $('#editPostModal input[name="title_en"]').val(postTitleEn);
        $('#editPostModal input[name="note_vi"]').val(postNoteVi);
        $('#editPostModal input[name="note_en"]').val(postNoteEn);
        $('#editPostModal select[name="category_id"]').val(categoryId);

        tinymce.remove("#mytextareaEditPostVi"); 
        tinymce.init({
            selector: "#mytextareaEditPostVi",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(postContentVi); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        tinymce.remove("#mytextareaEditPostEn"); 
        tinymce.init({
            selector: "#mytextareaEditPostEn",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(postContentEn); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        $("#editPostModal").modal("show");
    });

    //edit instagram
    $(".btn-edit-instagram").on("click", function () {
        var instagramId = $(this).data("id");
        var instagramUrl = $(this).data("url");
        var instagramImage = $(this).data("image");

        $('#editInstagramModal input[name="id"]').val(instagramId);
        $('#editInstagramModal input[name="url"]').val(instagramUrl);
        $('#editInstagramModal input[name="id"]').val(instagramId);

        // Đường dẫn gốc tới ảnh
        var basePath =
            "http://localhost/project/website/2024/waikiki/public/images/instagram/";

        // Hiển thị ảnh hiện tại nếu có
        if (instagramImage) {
            $("#current_image")
                .attr("src", basePath + instagramImage)
                .show();
        } else {
            $("#current_image").hide();
        }

        $("#editInstagramModal").modal("show");
    });

    //edit categories menu
    $(".btn-edit-categories-menu").on("click", function () {
        var categoryId = $(this).data("id");
        var categoryName = $(this).data("name");
        var categoryDescription = $(this).data("description");
        var categoryUrl = $(this).data('url');
        var categoryImage = $(this).data("image");

        //value => modal
        $('#editCategoriesMenuModal input[name="id"]').val(categoryId);
        $('#editCategoriesMenuModal input[name="name"]').val(categoryName);
        $('#editCategoriesMenuModal input[name="url"]').val(categoryUrl);

        // Đường dẫn gốc tới ảnh
        var basePath =
            "http://localhost/project/website/2024/waikiki/public/images/menu/";

        if (categoryImage) {
            $("#current_image")
                .attr("src", basePath + categoryImage)
                .show();
        } else {
            $("#current_image").hide();
        }

        tinymce.remove("#mytextareaEditCategory"); 
        tinymce.init({
            selector: "#mytextareaEditCategory",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(categoryDescription); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        $("#editCategoriesMenuModal").modal("show");
    });

    //edit menu
    $(".btn-edit-menu").on("click", function () {
        var menuId = $(this).data("id");
        var mennuNameVi = $(this).data("name_vi");
        var menuNameEn = $(this).data("name_en");
        var menuDescriptionVi = $(this).data("description_vi");
        var menuDescriptionEn = $(this).data("description_en");
        var menuImage = $(this).data("image");
        var menuPrice = $(this).data('price');
        var categoryId = $(this).data("category_id");

        console.log("Id category post", categoryId);

        $('#editMenuModal input[name="id"]').val(menuId);
        $('#editMenuModal input[name="name_vi"]').val(mennuNameVi);
        $('#editMenuModal input[name="name_en"]').val(menuNameEn);
        $('#editMenuModal input[name="price"]').val(menuPrice);
        $('#editMenuModal select[name="category_id"]').val(categoryId);

        // Đường dẫn gốc tới ảnh
        var basePath =
            "http://localhost/project/website/2024/waikiki/public/images/menu/";
        if (menuImage) {
            $("#current_image")
                .attr("src", basePath + menuImage)
                .show();
        } else {
            $("#current_image").hide();
        }

        tinymce.remove("#mytextareaEditMenuVi"); 
        tinymce.init({
            selector: "#mytextareaEditMenuVi",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(menuDescriptionVi); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        tinymce.remove("#mytextareaEditMenuEn"); 
        tinymce.init({
            selector: "#mytextareaEditMenuEn",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(menuDescriptionEn); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });


        $("#editMenuModal").modal("show");
    });

    //edit categories entertainment
    $(".btn-edit-categories-entertainment").on("click", function () {
        var categoryId = $(this).data("id");
        var categoryName = $(this).data("name");
        var categoryDescription = $(this).data("description");
        var categoryParentId = $(this).data('parent_id');
        //value => modal
        $('#editCategoriesEntertainmentModal input[name="id"]').val(categoryId);
        $('#editCategoriesEntertainmentModal input[name="name"]').val(categoryName);
        $('#editCategoriesEntertainmentModal select[name="parent_id"]').val(categoryParentId);

        tinymce.remove("#mytextareaEditCategory"); 
        tinymce.init({
            selector: "#mytextareaEditCategory",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(categoryDescription); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        $("#editCategoriesEntertainmentModal").modal("show");
    });

    //edit entertainment 
    $(".btn-edit-entertainment").on("click", function () {

        var entertainmentId = $(this).data("id");
        var entertainmentNameVi = $(this).data("name_vi");
        var entertainmentNameEn = $(this).data("name_en");
        var entertainmentDescriptionVi = $(this).data("description_vi");
        var entertainmentDescriptionEn = $(this).data("description_en");
        var entertainmentCategoryId = $(this).data("category_id");
        var entertainmentImage = $(this).data("image");

        $('#editEntertainmentModal input[name="id"]').val(entertainmentId);
        $('#editEntertainmentModal input[name="name_vi"]').val(entertainmentNameVi);
        $('#editEntertainmentModal input[name="name_en"]').val(entertainmentNameEn);
        $('#editEntertainmentModal textarea[name="description_vi"]').val(entertainmentDescriptionVi);
        $('#editEntertainmentModal textarea[name="description_en"]').val(entertainmentDescriptionEn);
        $('#editEntertainmentModal select[name="category_id"]').val(entertainmentCategoryId);

        tinymce.remove("#mytextareaEditPostVi"); 
        tinymce.init({
            selector: "#mytextareaEditPostVi",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(entertainmentDescriptionVi); // Set nội dung TinyMCE khi mở modal
                });
            }
        });

        tinymce.remove("#mytextareaEditPostVi"); 
        tinymce.init({
            selector: "#mytextareaEditPostVi",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(entertainmentDescriptionVi); // Set nội dung TinyMCE khi mở modal
                });
            }
        });tinymce.remove("#mytextareaEditPostEn"); 
        tinymce.init({
            selector: "#mytextareaEditPostEn",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(entertainmentDescriptionEn); // Set nội dung TinyMCE khi mở modal
                });
            }
        });
        // Đường dẫn gốc tới ảnh
        const productImages = JSON.parse(this.getAttribute("data-images")); //chuỗi JSON -> mảng
        const imageContainer = document.querySelector(
            "#editEntertainmentModal .image-container"
        );
        imageContainer.innerHTML = "";

        productImages.forEach((imageUrl) => {
            const imgElement = document.createElement("img");
            imgElement.src = "http://localhost/project/website/2024/waikiki/public/" + imageUrl;
            imgElement.style.width = "100px";
            imgElement.style.height = "auto";
            imgElement.style.margin = "5px";
            imageContainer.appendChild(imgElement);
        });

        $("#editEntertainmentModal").modal("show");

    });

    //edit categories history
    $(".btn-edit-categories-history").on("click", function () {
        var categoryId = $(this).data("id");
        var categoryName = $(this).data("name");
        var categoryDescription = $(this).data("description");
        var categoryParentId = $(this).data('parent_id');
        //value => modal
        $('#editCategoriesHistoryModal input[name="id"]').val(categoryId);
        $('#editCategoriesHistoryModal input[name="name"]').val(categoryName);
        $('#editCategoriesHistoryModal select[name="parent_id"]').val(categoryParentId);

        tinymce.remove("#mytextareaEditCategory"); 
        tinymce.init({
            selector: "#mytextareaEditCategory",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(categoryDescription); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });
        $("#editCategoriesHistoryModal").modal("show");
    });

    //edit history
    $(".btn-edit-history").on("click", function () {

        var historyId = $(this).data("id");
        var historyNameVi = $(this).data("name_vi");
        var historyNameEn = $(this).data("name_en");
        var historyDescriptionVi = $(this).data("description_vi");
        var historyDescriptionEn = $(this).data("description_en");
        var historyCategoryId = $(this).data("category_id");
        var historyImage = $(this).data("image");

        $('#editHistoryModal input[name="id"]').val(historyId);
        $('#editHistoryModal input[name="name_vi"]').val(historyNameVi);
        $('#editHistoryModal input[name="name_en"]').val(historyNameEn);
        $('#editHistoryModal textarea[name="description_vi"]').val(historyDescriptionVi);
        $('#editHistoryModal textarea[name="description_en"]').val(historyDescriptionEn);
        $('#editHistoryModal select[name="category_id"]').val(historyCategoryId);

        tinymce.remove("#mytextareaEditHistoryVi"); 
        tinymce.init({
            selector: "#mytextareaEditHistoryVi",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(historyDescriptionVi); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        tinymce.remove("#mytextareaEditHistoryEn"); 
        tinymce.init({
            selector: "#mytextareaEditHistoryEn",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(historyDescriptionEn); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        // Đường dẫn gốc tới ảnh
        var basePath =
            "http://localhost/project/website/2024/waikiki/public/images/history/";
        if (historyImage) {
            $("#current_image")
                .attr("src", basePath + historyImage)
                .show();
        } else {
            $("#current_image").hide();
        }

        $("#editHistoryModal").modal("show");

    });

    //edit categories image
    $(".btn-edit-categories-image").on("click", function () {
        var categoryId = $(this).data("id");
        var categoryName = $(this).data("name");
        var categoryDescription = $(this).data("description");
        console.log("Content category image", categoryDescription);
        var categoryParentId = $(this).data('parent_id');
        //value => modal
        $('#editCategoriesImageModal input[name="id"]').val(categoryId);
        $('#editCategoriesImageModal input[name="name"]').val(categoryName);
        $('#editCategoriesImageModal select[name="parent_id"]').val(categoryParentId);

        tinymce.remove("#mytextareaEditCategory"); 
        tinymce.init({
            selector: "#mytextareaEditCategory",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(categoryDescription); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        $("#editCategoriesImageModal").modal("show");
    });

    //edit image
    $(".btn-edit-image").on("click", function () {

        var imageId = $(this).data("id");
        var imageCategoryId = $(this).data('category_id');
        var imageUrl = $(this).data("url");

        $('#editImageModal input[name="id"]').val(imageId);
        $('#editImageModal select[name="category_id"]').val(imageCategoryId);

        // Đường dẫn gốc tới ảnh
        var basePath =
            "http://localhost/project/website/2024/waikiki/public/images/slider/";
        if (imageUrl) {
            $("#current_image")
                .attr("src", basePath + imageUrl)
                .show();
        } else {
            $("#current_image").hide();
        }

        $("#editImageModal").modal("show");

    });

     //edit categories promotion
     $(".btn-edit-categories-promotion").on("click", function () {
        var categoryId = $(this).data("id");
        var categoryName = $(this).data("name");
        var categoryDescription = $(this).data("description");
        var categoryParentId = $(this).data('parent_id');
        //value => modal
        $('#editCategoriesPromotionModal input[name="id"]').val(categoryId);
        $('#editCategoriesPromotionModal input[name="name"]').val(categoryName);
        $('#editCategoriesPromotionModal select[name="parent_id"]').val(categoryParentId);

        tinymce.remove("#mytextareaEditCategory"); 
        tinymce.init({
            selector: "#mytextareaEditCategory",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(categoryDescription); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        $("#editCategoriesPromotionModal").modal("show");
    });
   
    //edit promotion
    $(".btn-edit-promotion").on("click", function () {

        var promotionId = $(this).data("id");
        var promotionNameVi = $(this).data("name_vi");
        var promotionNameEn = $(this).data("name_en");
        var promotionDescriptionVi = $(this).data("description_vi");
        var promotionDescriptionEn = $(this).data("description_en");
        var promotionCategoryId = $(this).data("category_id");
        var promotionImage = $(this).data("image");
        var promotionDateTime = $(this).data("date_time");

        $('#editPromotionModal input[name="id"]').val(promotionId);
        $('#editPromotionModal input[name="name_vi"]').val(promotionNameVi);
        $('#editPromotionModal input[name="name_en"]').val(promotionNameEn);
        $('#editPromotionModal input[name="date_time"]').val(promotionDateTime);
        $('#editPromotionModal select[name="category_id"]').val(promotionCategoryId);

        tinymce.remove("#mytextareaEditPromotionVi"); 
        tinymce.init({
            selector: "#mytextareaEditPromotionVi",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(promotionDescriptionVi); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });

        tinymce.remove("#mytextareaEditPromotionEn"); 
        tinymce.init({
            selector: "#mytextareaEditPromotionEn",
            height: 200,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(promotionDescriptionEn); // Set nội dung TinyMCE khi mở modal
                });
            } 
        });
        // Đường dẫn gốc tới ảnh
        var basePath =
            "http://localhost/project/website/2024/waikiki/public/images/promotion/";
        if (promotionImage) {
            $("#current_image")
                .attr("src", basePath + promotionImage)
                .show();
        } else {
            $("#current_image").hide();
        }

        $("#editPromotionModal").modal("show");

    });
});

document.addEventListener("DOMContentLoaded", function () {
    const overlay = document.getElementById("overlay");
    let deleteUrl = "";
    let userId = "";

    // Event delegation: Lắng nghe sự kiện click trên document
    document.addEventListener("click", function (e) {
        // Kiểm tra nếu phần tử click là nút xóa
        if (e.target.closest(".btn-delete")) {
            e.preventDefault();
            const deleteBtn = e.target.closest(".btn-delete");

            // Lấy thông tin từ nút xóa
            deleteUrl = deleteBtn.getAttribute("href");
            userId = deleteBtn.getAttribute("data-id");

            // Hiển thị overlay (alert)
            overlay.classList.remove("d-none");

            console.log("ID người dùng:", userId); // Kiểm tra ID
        }

        // Xử lý nút Hủy
        if (e.target.classList.contains("btn-cancel-delete")) {
            overlay.classList.add("d-none"); // Ẩn overlay
            deleteUrl = ""; // Xóa URL xóa
        }

        // Xử lý nút Xác nhận xóa
        if (e.target.classList.contains("btn-confirm-delete")) {
            if (deleteUrl) {
                window.location.href = deleteUrl; // Chuyển hướng đến URL xóa
            }
        }
    });
});

document.addEventListener('change', function (e) {
    if (e.target.classList.contains('check-all')) {
        const moduleName = e.target.id;
        const isChecked = e.target.checked;

        // Tìm tất cả các checkbox con liên quan và thay đổi trạng thái
        document.querySelectorAll(`.permission[id^="${moduleName}"]`).forEach(function (checkbox) {
            checkbox.checked = isChecked;
        });
    }
});

//list images
document.getElementById("images").addEventListener("change", function (event) {
    const imagePreview = document.getElementById("image-preview");
    imagePreview.innerHTML = ""; // delete image after

    Array.from(event.target.files).forEach((file) => {
        const reader = new FileReader();
        reader.onload = function (e) {
            const img = document.createElement("img");
            img.src = e.target.result;
            img.style.maxWidth = "150px";
            img.style.marginRight = "10px";
            imagePreview.appendChild(img); // add image-preview
        };
        reader.readAsDataURL(file);
    });
});
