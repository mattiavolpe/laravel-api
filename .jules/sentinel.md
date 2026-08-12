## 2024-05-18 - Prevent IDOR in Resource Controllers
**Vulnerability:** Missing authorization checks in ProjectController methods (show, edit, update, destroy).
**Learning:** The application uses implicit route model binding without Laravel Policies, which leaves resource endpoints vulnerable to IDOR (Insecure Direct Object Reference). Any authenticated user could access, modify, or delete resources belonging to other users.
**Prevention:** Always implement authorization checks (e.g., using Policies or manual checks like `if ($model->user_id != auth()->id()) abort(403);`) in controller methods when accessing or manipulating resources that belong to a specific user.
