## 2024-10-16 - Fix IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` where implicit route model binding allows any authenticated user to view, edit, update, or delete any project by guessing its ID/slug.
**Learning:** Laravel's route model binding retrieves models without scoping to the authenticated user unless explicitly configured or checked.
**Prevention:** Always manually enforce ownership checks for user-specific resources when using implicit route model binding.
