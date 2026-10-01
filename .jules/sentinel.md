## 2024-10-01 - Prevent IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `Admin/ProjectController.php`.
**Learning:** Controller routes relying on implicit model binding do not automatically check ownership, allowing any authenticated user to view/edit/delete any project.
**Prevention:** Always verify `$model->user_id == auth()->id()` or use Laravel Policies when modifying or accessing user-owned resources via model binding.
