## 2024-08-27 - Missing IDOR Protection on Implicit Route Model Binding
**Vulnerability:** IDOR vulnerability in ProjectController where users could access, edit, update, or destroy projects belonging to other users.
**Learning:** The application uses implicit route model binding but lacks automatic ownership authorization checks in controller methods out of the box.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on user-specific resources retrieved via route model binding.
