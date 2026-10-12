## 2023-10-12 - Fix IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` methods (`show`, `edit`, `update`, `destroy`). Users could view, modify, or delete projects belonging to other users by changing the project slug/ID in the URL.
**Learning:** The codebase relies on implicit route model binding which automatically fetches the model based on the URL parameter. However, it does not automatically enforce authorization checks to ensure the logged-in user owns the fetched model.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) for user-specific resources when using implicit route model binding, or utilize Laravel Policies for more robust authorization.
