## 2024-08-28 - IDOR Vulnerability in Resource Controllers
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController's implicit route model binding methods (show, edit, update, destroy), allowing users to access and modify projects they don't own.
**Learning:** Laravel's route model binding implicitly retrieves records by ID, but does not inherently enforce ownership checks on user-specific resources within standard auth middleware unless explicitly told to do so via policies or manual authorization.
**Prevention:** Always manually verify ownership (e.g., if ($model->user_id != auth()->id()) abort(403);) or use Laravel Authorization Policies for user-specific resources bound in routes.
