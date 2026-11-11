## 2024-11-11 - Implicit Route Binding IDOR
**Vulnerability:** IDOR in ProjectController's show, edit, update, and destroy methods due to implicit route model binding without ownership validation.
**Learning:** The codebase relies on implicit route model binding which fetches models by ID/slug globally, bypassing the user's specific relationships, making explicit ownership checks necessary for user-owned models.
**Prevention:** Always add manual explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) when using implicit route model binding on user-specific resources like Projects.
