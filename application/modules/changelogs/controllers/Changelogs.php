<?php
/**
 * BlizzCMS
 *
 * @author  WoW-CMS
 * @copyright  Copyright (c) 2017 - 2021, WoW-CMS.
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    https://wow-cms.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Changelogs extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        mod_located('changelogs', true);

        if (! $this->cms->isLogged())
        {
            redirect(site_url('login'));
        }

        $this->load->model([
            'changelogs_model' => 'changelogs'
        ]);

        $this->load->language('changelogs');
    }

    public function index()
    {
        $get  = $this->input->get('page', TRUE);
        $page = ctype_digit((string) $get) ? $get : 0;

        $config = [
            'base_url'    => site_url('changelogs'),
            'total_rows'  => $this->changelogs->count_all(),
            'per_page'    => 15,
            'uri_segment' => 2
        ];

        $this->pagination->initialize($config);

        // Calculate offset if use_page_numbers is TRUE on pagination
        $offset = ($page > 1) ? ($page - 1) * $config['per_page'] : $page;

        $data = [
            'changelogs' => $this->changelogs->find_all($config['per_page'], $offset),
            'links'      => $this->pagination->create_links()
        ];

        $this->template->title(config_item('app_name'), lang('changelogs'));

        $this->template->build('index', $data);
    }
}
